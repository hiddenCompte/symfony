<?php

namespace App\Controller\Mission;

use App\Entity\Candidature;
use App\Entity\Mission;
use App\Entity\User;
use App\Form\CandidatureType;
use App\Repository\CandidatureRepository;
use App\Repository\MissionRepository;
use App\Service\QrCodeService;
use Doctrine\ORM\EntityManagerInterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/candidature')]
class CandidatureController extends AbstractController
{
    private function checkEmployerAccess(): ?Response
    {
        $user = $this->getUser();
        if (!$user || $user->getTypeUtilisateur() !== User::USER_TYPE_EMPLOYEUR) {
            return $this->render('error/access_denied.html.twig', [
                'message' => 'Désolé, seuls les employeurs peuvent accéder aux candidatures. Si vous souhaitez gérer des candidatures, veuillez vous connecter en tant qu\'employeur.'
            ]);
        }
        return null;
    }

    #[Route('/', name: 'app_candidature_index', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function index(Request $request, CandidatureRepository $candidatureRepository, MissionRepository $missionRepository, EntityManagerInterface $em): Response
    {
        if ($response = $this->checkEmployerAccess()) {
            return $response;
        }

        try {
            $searchTerm = $request->query->get('search', '');
            $sort = $request->query->get('sort', 'default');

            // Get the first mission for the new candidature link
            $mission = $missionRepository->findOneBy([], ['datePub' => 'DESC']);
            if (!$mission) {
                throw new \Exception('No mission found');
            }

            $missionId = $mission->getId();

            // Get candidatures with sorting
            $candidatures = [];
            if ($searchTerm) {
                $candidatures = $candidatureRepository->findBySearchTerm($searchTerm);
            } else {
                $candidatures = $candidatureRepository->findAllWithUserAndMission($sort);
            }

            // Create response with no-cache headers
            $response = new Response();
            $response->headers->set('Cache-Control', 'no-cache, must-revalidate');
            $response->headers->set('Pragma', 'no-cache');
            $response->headers->set('Expires', '0');

            // Set content
            $response->setContent($this->renderView('candidature/index.html.twig', [
                'candidatures' => $candidatures,
                'search_term' => $searchTerm,
                'missionId' => $missionId,
                'current_sort' => $sort,
                'search_by' => $request->query->get('search_by', 'all')
            ]));

            return $response;
        } catch (\Exception $e) {
            $this->addFlash('error', 'Une erreur est survenue: ' . $e->getMessage());
            
            // Create error response
            $response = new Response();
            $response->headers->set('Cache-Control', 'no-cache, must-revalidate');
            $response->headers->set('Pragma', 'no-cache');
            $response->headers->set('Expires', '0');

            $response->setContent($this->renderView('candidature/index.html.twig', [
                'candidatures' => [],
                'search_term' => '',
                'missionId' => null,
                'current_sort' => 'default',
                'search_by' => 'all'
            ]));

            return $response;
        }
    }

    #[Route('/candidature/new/{userId}/{missionId}', name: 'app_candidature_new', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')]
    public function new(
        Request $request,
        EntityManagerInterface $em,
        int $userId,
        int $missionId
    ): Response
    {
        if ($response = $this->checkEmployerAccess()) {
            return $response;
        }

        // Récupérer les entités User et Mission
        $user = $em->getRepository(User::class)->find($userId);
        $mission = $em->getRepository(Mission::class)->find($missionId);

        if (!$user || !$mission) {
            throw $this->createNotFoundException('Utilisateur ou mission introuvable');
        }

        $candidature = new Candidature();
        $candidature->setUser($user);
        $candidature->setMission($mission);

        $form = $this->createForm(CandidatureType::class, $candidature);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $candidature = $form->getData();
            
            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                $newFilename = uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        __DIR__ . '/../../../public/uploads/candidatures',
                        $newFilename
                    );
                    $candidature->setImage($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement de l\'image.');
                }
            }

            $em->persist($candidature);
            $em->flush();

            return $this->redirectToRoute('app_candidature_index');
        }

        return $this->render('candidature/new.html.twig', [
            'candidature' => $candidature,
            'form' => $form->createView(),
            'userId' => $userId,
            'missionId' => $missionId
        ]);

        return $this->render('candidature/new.html.twig', [
            'candidature' => $candidature,
            'form' => $form->createView(),
            'userId' => $userId,
            'missionId' => $missionId
        ]);
    }

    #[Route('/create', name: 'app_candidature_create', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function create(
        Request $request,
        EntityManagerInterface $em
    ): Response
    {
        if ($response = $this->checkEmployerAccess()) {
            return $response;
        }

        $candidature = new Candidature();
        $form = $this->createForm(CandidatureType::class, $candidature);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                $newFilename = uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        __DIR__ . '/../../../public/uploads/candidatures',
                        $newFilename
                    );
                    $candidature->setImage($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement de l\'image.');
                }
            }

            $em->persist($candidature);
            $em->flush();

            return $this->redirectToRoute('app_candidature_index');
        }

        // If form is invalid, redirect back to new form
        return $this->redirectToRoute('app_candidature_new', [
            'userId' => $candidature->getUser()->getId(),
            'missionId' => $candidature->getMission()->getId()
        ]);
    }

    #[Route('/show/{id}', name: 'app_candidature_show', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function show(int $id, CandidatureRepository $candidatureRepository, QrCodeService $qrCodeGenerator): Response
    {
        if ($response = $this->checkEmployerAccess()) {
            return $response;
        }

        $candidature = $candidatureRepository->find($id);

        if (!$candidature) {
            throw $this->createNotFoundException('Candidature non trouvée');
        }

        // Check if the user is the owner of the candidature or has admin role
        if (!$this->isGranted('ROLE_ADMIN') && $candidature->getUser() !== $this->getUser()) {
            throw new AccessDeniedException('Vous n\'avez pas accès à cette candidature.');
        }

        $qrCode = null;
        if ($candidature->getMission()) {
            $qrCode = $qrCodeGenerator->generateForMission($candidature->getMission());
        }

        return $this->render('candidature/show.html.twig', [
            'candidature' => $candidature,
            'qrCode' => $qrCode,
        ]);
    }

    #[Route('/edit/{id}', name: 'app_candidature_edit', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')]
    public function edit(Request $request, int $id, CandidatureRepository $candidatureRepository, EntityManagerInterface $em): Response
    {
        if ($response = $this->checkEmployerAccess()) {
            return $response;
        }

        $candidature = $candidatureRepository->find($id);

        if (!$candidature) {
            throw $this->createNotFoundException('Candidature non trouvée');
        }

        // Check if the user is the owner of the candidature or has admin role
        if (!$this->isGranted('ROLE_ADMIN') && $candidature->getUser() !== $this->getUser()) {
            throw new AccessDeniedException('Vous n\'avez pas accès à cette candidature.');
        }

        $form = $this->createForm(CandidatureType::class, $candidature);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                // Delete the old image if it exists
                if ($candidature->getImage()) {
                    $oldImagePath = __DIR__ . '/../../../public/uploads/candidatures/' . $candidature->getImage();
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }

                // Upload the new image
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();
                try {
                    $imageFile->move(
                        __DIR__ . '/../../../public/uploads/candidatures',
                        $newFilename
                    );
                    $candidature->setImage($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement de l\'image.');
                }
            }

            $em->flush();
            return $this->redirectToRoute('app_candidature_index');
        }

        return $this->renderForm('candidature/edit.html.twig', [
            'candidature' => $candidature,
            'form' => $form,
        ]);
    }

    #[Route('/delete/{id}', name: 'app_candidature_delete', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function delete(int $id, Request $request, CandidatureRepository $candidatureRepository, EntityManagerInterface $em): Response
    {
        if ($response = $this->checkEmployerAccess()) {
            return $response;
        }

        $candidature = $candidatureRepository->find($id);
        
        if (!$candidature) {
            throw $this->createNotFoundException('Candidature non trouvée');
        }

        // Check if the user is the owner of the candidature or has admin role
        if (!$this->isGranted('ROLE_ADMIN') && $candidature->getUser() !== $this->getUser()) {
            throw new AccessDeniedException('Vous n\'avez pas accès à cette candidature.');
        }

        if ($this->isCsrfTokenValid('delete'.$id, $request->request->get('_token'))) {
            $em->remove($candidature);
            $em->flush();
        }

        return $this->redirectToRoute('app_candidature_index');
    }

    #[Route('/{id}/qrcode', name: 'app_candidature_qrcode', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')]
    public function qrcode(Request $request, Candidature $candidature, QrCodeService $qrCodeService): Response
    {
        if ($response = $this->checkEmployerAccess()) {
            return $response;
        }

        $form = $this->createForm(CandidatureType::class, $candidature);
        $form->handleRequest($request);

        // Check if the user is the owner of the candidature or has admin role
        if (!$this->isGranted('ROLE_ADMIN') && $candidature->getUser() !== $this->getUser()) {
            throw new AccessDeniedException('Vous n\'avez pas accès à cette candidature.');
        }

        $mission = $candidature->getMission();
        // Format the mission details
        $missionDetails = sprintf(
            "%s\nBudget: %.2f €\nDurée: %d jours\nCompétences: %s",
            $mission->getTitre(),
            $mission->getBudget() ?? 0,
            $mission->getDuree() ?? 0,
            $mission->getCompetance() ?? 'Non spécifié'
        );

        // Generate QR code with detailed information
        $qrCode = $qrCodeService->generateQrCode([
            'id' => $candidature->getId(),
            'user' => $candidature->getUser()->getPrenom() . ' ' . $candidature->getUser()->getNom(),
            'mission' => $missionDetails,
            'date' => (new \DateTime())->format('d/m/Y')
        ]);

        return $this->render('candidature/qrcode.html.twig', [
            'candidature' => $candidature,
            'form' => $form->createView(),
            'qrCode' => $qrCode
        ]);
    }

    #[Route('/export/excel', name: 'app_candidature_export_excel')]
    #[IsGranted('ROLE_USER')]
    public function exportExcel(CandidatureRepository $candidatureRepository): Response
    {
        if ($response = $this->checkEmployerAccess()) {
            return $response;
        }

        $candidatures = $candidatureRepository->findAll();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Nom utilisateur');
        $sheet->setCellValue('C1', 'Titre mission');
        $sheet->setCellValue('D1', 'Réponse Questions');
        $sheet->setCellValue('E1', 'Lettre de Motivation');

        $row = 2;
        foreach ($candidatures as $candidature) {
            $sheet->setCellValue('A'.$row, $candidature->getId());
            $sheet->setCellValue('B'.$row, $candidature->getUser()?->getNom() ?? 'N/A');
            $sheet->setCellValue('C'.$row, $candidature->getMission()?->getTitre() ?? 'N/A');
            $sheet->setCellValue('D'.$row, $candidature->getReponseQuestions());
            $sheet->setCellValue('E'.$row, $candidature->getLettreMotivation());
            $row++;
        }

        $writer = new Xlsx($spreadsheet);
        $temp_file = tempnam(sys_get_temp_dir(), 'excel');
        $writer->save($temp_file);

        return $this->file($temp_file, 'candidatures.xlsx', ResponseHeaderBag::DISPOSITION_INLINE);
    }
}
