<?php

namespace App\Controller;

use App\Entity\Publication;
use App\Repository\PublicationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/publication')]
final class PublicationController extends AbstractController
{
    private $validator;

public function __construct(ValidatorInterface $validator)
    {
        $this->validator = $validator;
}

    #[Route(name: 'app_publication_index', methods: ['GET'])]
public function index(PublicationRepository $publicationRepository): Response
    {
        return $this->render('publication/index.html.twig', [
            'publications' => $publicationRepository->findAllWithComments(),
        ]);
}

    #[Route('/new', name: 'app_publication_new', methods: ['POST','GET'])]
public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        try {
            // Vérifier si la requête est de type POST
            if ($request->isMethod('POST')) {
                // Log pour déboguer
                error_log('Début de la méthode new() - POST');
                
                // Récupérer les données du formulaire
                $content = $request->request->get('content');
                
                error_log('Contenu reçu: ' . $content);
                
                // Créer un nouveau post
                $post = new Publication();
                $post->setContent($content);
                $post->setCreatedAt(new \DateTime());
                $post->setTitle('Post');
                $post->setUserId(2); // À remplacer par l'ID de l'utilisateur connecté
                $post->setCategorie("formation");
                
                // Valider l'entité
                $errors = $this->validator->validate($post);
                if (count($errors) > 0) {
                    $errorMessages = [];
                    foreach ($errors as $error) {
                        $errorMessages[] = $error->getMessage();
                    }
                    error_log('Erreurs de validation: ' . implode(', ', $errorMessages));
                    return new JsonResponse(['error' => implode(', ', $errorMessages)], Response::HTTP_BAD_REQUEST);
                }
                
                error_log('Post créé avec les données: ' . json_encode([
                    'content' => $content,
                    'title' => 'Post',
                    'user_id' => 1,
                    'categorie' => 'formation'
                ]));
                
                // Gérer l'upload d'image
                $imageFile = $request->files->get('image');
                if ($imageFile) {
                    try {
                        error_log('Traitement de l\'image');
                        $newFilename = uniqid().'.'.$imageFile->guessExtension();
                        $uploadDir = $this->getParameter('uploads_directory');
                        error_log('Dossier d\'upload: ' . $uploadDir);
                        
                        // Vérifier si le dossier existe
                        if (!file_exists($uploadDir)) {
                            error_log('Le dossier d\'upload n\'existe pas, création...');
                            mkdir($uploadDir, 0777, true);
                        }
                        
                        $imageFile->move($uploadDir, $newFilename);
                        $post->setImageUrl($newFilename);
                        error_log('Image uploadée: ' . $newFilename);
                    } catch (\Exception $e) {
                        error_log('Erreur lors de l\'upload de l\'image: ' . $e->getMessage());
                        return new JsonResponse(['error' => 'Erreur lors de l\'upload de l\'image: ' . $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
                    }
                }
                
                // Afficher l'entité complète avant la persistance
                error_log('Entité Publication avant persistance:');
                error_log('post_id: ' . $post->getPostId());
                error_log('user_id: ' . $post->getUserId());
                error_log('title: ' . $post->getTitle());
                error_log('content: ' . $post->getContent());
                error_log('image_url: ' . $post->getImageUrl());
                error_log('created_at: ' . $post->getCreatedAt()->format('Y-m-d H:i:s'));
                error_log('categorie: ' . $post->getCategorie());
                
                // Persister et sauvegarder l'entité
                try {
                    error_log('Tentative de persistance de l\'entité');
                    $entityManager->persist($post);
                    error_log('Entité persistée, tentative de flush');
                    $entityManager->flush();
                    error_log('Flush réussi, post ajouté à la base de données');
                } catch (\Exception $e) {
                    error_log('Erreur lors de la persistance de l\'entité: ' . $e->getMessage());
                    return new JsonResponse(['error' => 'Erreur lors de la persistance de l\'entité: ' . $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
                }
                
                // Retourner une réponse JSON avec un message de succès
                return new JsonResponse(['message' => 'Post ajouté avec succès'], Response::HTTP_OK);
            }
            
            // Si la requête est de type GET, afficher le formulaire
            return $this->render('publication/new.html.twig');
        } catch (\Exception $e) {
            // Gérer les erreurs générales
            error_log('Erreur générale: ' . $e->getMessage());
            return new JsonResponse(['error' => 'Une erreur est survenue: ' . $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
}

    #[Route('/user_publication', name: 'user_publications_index', methods: ['GET'])]
public function user_publication_index(PublicationRepository $publicationRepository): Response
    {
        // Récupérer l'utilisateur connecté
        $userId = 1;
        
        if (!$userId) {
            // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
            return $this->redirectToRoute('app_login');
        }
        
        // Récupérer les publications de l'utilisateur connecté
        $publications = $publicationRepository->findBy(['user_id' => $userId], ['created_at' => 'DESC']);
        
        return $this->render('frontoffice/user_publications.html.twig', [
            'publications' => $publications
        ]);
         
}

    #[Route('/{id}', name: 'app_publication_show', methods: ['GET'])]
public function show(Publication $publication): Response
    {
        return $this->render('publication/show.html.twig', [
            'publication' => $publication,
        ]);
}

    #[Route('/{id}/edit', name: 'app_publication_edit', methods: ['GET' , 'POST'], requirements: ['id' => '\d+'])]
public function edit(Request $request, Publication $publication, EntityManagerInterface $entityManager): Response
    {
        if ($request->isMethod('GET')) {
            try {
                return new JsonResponse([
                    'id' => $publication->getPostId(),
                    'content' => $publication->getContent(),
                    'imageUrl' => $publication->getImageUrl()
                ]);
            } catch (\Exception $e) {
                error_log('Erreur lors de la récupération des données: ' . $e->getMessage());
                return new JsonResponse(['error' => 'Erreur lors de la récupération des données'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        }

        if ($request->isMethod('POST')) {
            try {
                // Récupérer les données du formulaire
                $content = $request->request->get('content');
                if (empty($content)) {
                    return new JsonResponse(['error' => 'Le contenu ne peut pas être vide'], Response::HTTP_BAD_REQUEST);
                }

                // Mettre à jour le contenu
                $publication->setContent($content);

                // Gérer l'upload de l'image si une nouvelle image est fournie
                if ($request->files->has('image')) {
                    $imageFile = $request->files->get('image');
                    if ($imageFile) {
                        // Supprimer l'ancienne image si elle existe
                        if ($publication->getImageUrl()) {
                            $oldImagePath = $this->getParameter('kernel.project_dir') . '/public/uploads/' . $publication->getImageUrl();
                            if (file_exists($oldImagePath)) {
                                unlink($oldImagePath);
                            }
                        }

                        // Générer un nom unique pour la nouvelle image
                        $fileName = uniqid() . '.' . $imageFile->guessExtension();
                        $imageFile->move(
                            $this->getParameter('kernel.project_dir') . '/public/uploads',
                            $fileName
                        );
                        $publication->setImageUrl($fileName);
                    }
                }

                $entityManager->flush();
                return new JsonResponse(['message' => 'Publication modifiée avec succès']);
            } catch (\Exception $e) {
                error_log('Erreur lors de la modification: ' . $e->getMessage());
                return new JsonResponse(['error' => 'Une erreur est survenue lors de la modification de la publication'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        }

        return new JsonResponse(['error' => 'Méthode non autorisée'], Response::HTTP_METHOD_NOT_ALLOWED);
}

    #[Route('/{id}', name: 'app_publication_delete', methods: ['POST' ])]
public function delete(Request $request, Publication $publication, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$publication->getPostId(), $request->getPayload()->getString('_token'))) {
           
            $entityManager->remove($publication);
            $entityManager->flush();
        }

        return $this->redirectToRoute('user_publications_index', [], Response::HTTP_SEE_OTHER);
}

}
