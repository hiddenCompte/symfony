<?php

namespace App\Controller;

use App\Entity\Comments;
use App\Form\CommentsType;
use App\Repository\CommentsRepository;
use App\Repository\PublicationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\UserRepository;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/comments')]
final class CommentsController extends AbstractController
{
    #[Route(name: 'app_comments_index', methods: ['GET'])]
    public function index(
        CommentsRepository $commentsRepository,
        PaginatorInterface $paginator,
        Request $request
    ): Response {
        $comments = $commentsRepository->findAll();
    
        $pagination = $paginator->paginate(
            $comments, // tableau d'entités
            $request->query->getInt('page', default: 1), // numéro de page
            28 // nombre par page
        );
    
        return $this->render('comments/index.html.twig', [
            'pagination' => $pagination,
        ]);
    }

    #[Route('/api/comments/{postId}', name: 'api_get_comments', methods: ['GET'])]
public function getComments(int $postId, PublicationRepository $publicationRepository): JsonResponse
{
    $publication = $publicationRepository->find($postId);

    if (!$publication) {
        return new JsonResponse([
            'error' => 'Publication not found for ID: ' . $postId
        ], 404);
    }

    $comments = [];
    foreach ($publication->getComments() as $comment) {
        $comments[] = [
            'userName' => $comment->getUser()->getUsername(),
            'comment_text' => $comment->getCommentText(),
            'created_at' => $comment->getCreatedAt()->format('Y-m-d H:i'),
            'comment_id' => $comment->getcommentId(),
        ];
    }

    return new JsonResponse($comments);
}

    #[Route('/api/add', name: 'api_add_comment', methods: ['POST','GET'])]
public function add(Request $request, EntityManagerInterface $em, PublicationRepository $publicationRepo , UserRepository $userRepo): JsonResponse // Security $security
{
    
    $data = json_decode($request->getContent(), true);
    
    $publication = $publicationRepo->find($data['postId']);
    if (!$publication) {
        return new JsonResponse(['success' => false, 'message' => 'Publication not found'], 404);
    }

    //$user = $security->getUser();
    $user = $userRepo->find(1);
    if (!$user) {
        return new JsonResponse(['success' => false, 'message' => 'User not authenticated'], 401);
    }

    $comment = new Comments();
    $comment->setCommentText($data['commentText']);
    $comment->setPost($publication);
    $comment->setUser($user);
    $comment->setCreatedAt(new \DateTimeImmutable());

    $em->persist($comment);
    $em->flush();

    return new JsonResponse(['success' => true]);
}

    #[Route('/comment/reply', name: 'api_add_reply', methods: ['POST','GET'])]
public function addreply(Request $request, EntityManagerInterface $em, CommentsRepository $commentRepo , UserRepository $userRepo): JsonResponse // Security $security
{
    
    $data = json_decode($request->getContent(), true);

    $parentId = $data['comment_id'] ?? null;
    $replyText = trim($data['reply'] ?? '');

    if (!$parentId || $replyText === '') {
        return new JsonResponse(['success' => false, 'message' => 'Données invalides'], 400);
    }

    $parentComment = $commentRepo->find($parentId);
    if (!$parentComment) {
        return new JsonResponse(['success' => false, 'message' => 'Commentaire parent introuvable'], 404);
    }

    // À remplacer par $this->getUser() si tu utilises le système de sécurité
    $user = $userRepo->find(1);
    if (!$user) {
        return new JsonResponse(['success' => false, 'message' => 'Utilisateur non trouvé'], 401);
    }

    $reply = new Comments();
    $reply->setCommentText($replyText);
    $reply->setParentId($parentComment); // propriété ManyToOne vers self::class
    $reply->setUser($user);
    $reply->setCreatedAt(new \DateTimeImmutable());
    $reply->setPost($parentComment->getPost()); // pour garder la relation avec la publication

    $em->persist($reply);
    $em->flush();

    return new JsonResponse([
        'success' => true,
        'reply' => htmlspecialchars($replyText),
        'commentId' => $parentId
    ]);
}

    #[Route('/api/{id}/replies', name: 'comment_replies', methods: ['GET'])]
public function getReplies(int $id, CommentsRepository $commentRepo): JsonResponse
{
    $parent = $commentRepo->find($id);
    if (!$parent) {
        return new JsonResponse(['success' => false, 'message' => 'Commentaire introuvable'], 404);
    }

    $replies = $parent->getReplies(); // Collection de Comments

    $response = [];
    foreach ($replies as $reply) {
        $response[] = [
            'id' => $reply->getCommentId(),
            'text' => $reply->getCommentText(),
            'user' => $reply->getUser()->getUsername(), // adapte selon ton entité User
            'createdAt' => $reply->getCreatedAt()->format('d/m/Y H:i'),
        ];
    }

    return new JsonResponse(['success' => true, 'replies' => $response]);
}

    #[Route('/{id}', name: 'app_comments_show', methods: ['GET'])]
public function show(Comments $comment): Response
    {
        return $this->render('comments/show.html.twig', [
            'comment' => $comment,
        ]);
}

    #[Route('/{id}/edit', name: 'app_comments_edit', methods: [ 'POST'])]
public function edit(Request $request, Comments $comment, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CommentsType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_comments_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('comments/edit.html.twig', [
            'comment' => $comment,
            'form' => $form,
        ]);
}

    #[Route('/delete/{id}', name: 'app_comments_delete', methods: ['GET','POST'])]
public function delete(Request $request, Comments $comment, EntityManagerInterface $entityManager): JsonResponse
    {
        // Supprimer le commentaire de la base de données
        $entityManager->remove($comment);
        $entityManager->flush();
        
    
        // Retourner une réponse JSON de succès
        return new JsonResponse(['success' => true], JsonResponse::HTTP_OK);
}
    
}
