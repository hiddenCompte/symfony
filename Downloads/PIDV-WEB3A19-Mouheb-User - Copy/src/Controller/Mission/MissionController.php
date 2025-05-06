<?php
// src/Controller/Mission/MissionController.php

namespace App\Controller\Mission;

use App\Entity\Mission;
use App\Entity\User;
use App\Form\MissionType;
use App\Repository\MissionRepository;
use App\Service\PdfGenerator;
use Doctrine\ORM\EntityManagerInterface;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

#[Route('/mission')]
class MissionController extends AbstractController
{
    private function checkEmployerAccess(): ?Response
    {
        $user = $this->getUser();
        if (!$user || $user->getTypeUtilisateur() !== User::USER_TYPE_EMPLOYEUR) {
            return $this->render('error/access_denied.html.twig', [
                'message' => 'Désolé, seuls les employeurs peuvent accéder aux missions. Si vous souhaitez publier ou gérer des missions, veuillez vous connecter en tant qu\'employeur.'
            ]);
        }
        return null;
    }

    #[Route('/', name: 'app_mission_index', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function index(Request $request, MissionRepository $missionRepository): Response
    {
        if ($response = $this->checkEmployerAccess()) {
            return $response;
        }

        $category = $request->query->get('category');
        $search = $request->query->get('search');
        
        if ($category) {
            $missions = $missionRepository->findByCategory($category);
        } elseif ($search) {
            $missions = $missionRepository->searchByEnterpriseName($search);
        } else {
            $missions = $missionRepository->findAll();
        }

        return $this->render('mission/index.html.twig', [
            'missions' => $missions,
            'search_term' => $search,
            'current_category' => $category
        ]);
    }

    #[Route('/new', name: 'app_mission_new', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($response = $this->checkEmployerAccess()) {
            return $response;
        }

        $mission = new Mission();
        $form = $this->createForm(MissionType::class, $mission);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($mission);
            $entityManager->flush();

            $this->addFlash('success', 'Mission créée avec succès');
            return $this->redirectToRoute('app_mission_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('mission/new.html.twig', [
            'mission' => $mission,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_mission_show', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function show(Mission $mission): Response
    {
        if ($response = $this->checkEmployerAccess()) {
            return $response;
        }

        return $this->render('mission/show.html.twig', [
            'mission' => $mission,
        ]);
    }

    #[Route('/{id}/qrcode', name: 'app_mission_qrcode', methods: ['GET'])]
    public function generateQrCode(Mission $mission): Response
    {
        $pdfUrl = $this->generateUrl(
            'app_mission_pdf', 
            ['id' => $mission->getId()], 
            UrlGeneratorInterface::ABSOLUTE_URL
        );
    
        $qrCode = Builder::create()
            ->data($pdfUrl)
            ->encoding(new Encoding('UTF-8'))
            ->size(300)
            ->margin(10)
            ->build();
    
        return new Response(
            $qrCode->getString(),
            200,
            ['Content-Type' => $qrCode->getMimeType()]
        );
    }

    #[Route('/{id}/pdf', name: 'app_mission_pdf', methods: ['GET'])]
    public function generatePdf(Mission $mission, PdfGenerator $pdfGenerator): Response
    {
        $html = $this->renderView('mission/pdf.html.twig', [
            'mission' => $mission,
            'image_dir' => $this->getParameter('kernel.project_dir').'/public/uploads/'
        ]);

        return $pdfGenerator->generatePdf($html, "mission_{$mission->getId()}.pdf");
    }

    #[Route('/{id}/edit', name: 'app_mission_edit', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')]
    public function edit(Request $request, Mission $mission, EntityManagerInterface $entityManager): Response
    {
        if ($response = $this->checkEmployerAccess()) {
            return $response;
        }

        $form = $this->createForm(MissionType::class, $mission);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Mission mise à jour avec succès');
            return $this->redirectToRoute('app_mission_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('mission/edit.html.twig', [
            'mission' => $mission,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_mission_delete', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function delete(Request $request, Mission $mission, EntityManagerInterface $entityManager): Response
    {
        if ($response = $this->checkEmployerAccess()) {
            return $response;
        }

        if ($this->isCsrfTokenValid('delete'.$mission->getId(), $request->request->get('_token'))) {
            $entityManager->remove($mission);
            $entityManager->flush();
            $this->addFlash('success', 'Mission supprimée avec succès');
        } else {
            $this->addFlash('error', 'Token CSRF invalide, impossible de supprimer la mission');
        }

        return $this->redirectToRoute('app_mission_index', [], Response::HTTP_SEE_OTHER);
    }
}