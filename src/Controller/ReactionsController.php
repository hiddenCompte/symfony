<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Publication;
use App\Entity\Reaction;
use App\Entity\ReactionComment;
use App\Repository\CommentsRepository;
use App\Repository\PublicationRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;



#[Route('/reactions')]
final class ReactionsController extends AbstractController {

    #[Route(name: 'app_reaction_index', methods: ['GET'])]
    public function index ( ):Response{
            return $this->render('reactions/index.html.twig');
    }

#[Route('/add' ,name: 'app_reaction_add', methods: ['POST'])]
public function addReaction(Request $request, EntityManagerInterface $em, PublicationRepository $publicationRepo, UserRepository $userRepo): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $postId = $data['post_id']; // ID du post
        $reactionType = $data['reaction_type']; // Type de réaction (par exemple, "❤️")

        // Récupérer l'utilisateur connecté, ici on récupère l'utilisateur avec l'ID 1 pour l'exemple
        // Remplace ce code par la récupération de l'utilisateur connecté (via la session ou autre méthode)
        $user = $userRepo->find(1); // Remplacer par $this->security->getUser() pour récupérer l'utilisateur connecté

        if (!$user) {
            return new JsonResponse(['error' => 'Utilisateur non trouvé.'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Récupérer le post (publication)
        $post = $publicationRepo->find($postId);

        if (!$post) {
            return new JsonResponse(['error' => 'Post non trouvé.'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Vérifier si la réaction existe déjà pour cet utilisateur et ce post
        $existingReaction = $em->getRepository(Reaction::class)->findOneBy([
            'post' => $post,
            'user' => $user
        ]);

        if ($existingReaction) {
            // Si la réaction existe déjà, la mettre à jour
            if ($existingReaction->getReactionType() === $reactionType) {
                // Même réaction → supprimer
                $em->remove($existingReaction);
            } else {
                // Réaction différente → mettre à jour
                $existingReaction->setReactionType($reactionType);
            }
        } else {
            // Sinon, créer une nouvelle réaction
            $reaction = new Reaction();
            $reaction->setPost($post)
                ->setUser($user)
                ->setReactionType($reactionType)
                ->setCreatedAt(new \DateTimeImmutable());

            $em->persist($reaction);
        }

        // Enregistrer les modifications dans la base de données
        $em->flush();

        return new JsonResponse(['success' => true], JsonResponse::HTTP_OK);
    }
 #[Route('/add/comment' ,name: 'app_reaction_comment_add', methods: ['POST','GET'])]
    public function addReactionComment(Request $request, EntityManagerInterface $em, CommentsRepository $commentRepo, UserRepository $userRepo): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $commentId = $data['comment_id']; // ID du post
        $reactionType = $data['reaction_type']; // Type de réaction (par exemple, "❤️")

        // Récupérer l'utilisateur connecté, ici on récupère l'utilisateur avec l'ID 1 pour l'exemple
        // Remplace ce code par la récupération de l'utilisateur connecté (via la session ou autre méthode)
        $user = $userRepo->find(1); // Remplacer par $this->security->getUser() pour récupérer l'utilisateur connecté

        if (!$user) {
            return new JsonResponse(['error' => 'Utilisateur non trouvé.'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Récupérer le post (publication)
        $comment = $commentRepo->find($commentId);

        if (!$comment) {
            return new JsonResponse(['error' => 'Post non trouvé.'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Vérifier si la réaction existe déjà pour cet utilisateur et ce post
        $existingReaction = $em->getRepository(ReactionComment::class)->findOneBy([
            'comment' => $comment,
            'user' => $user
        ]);

        if ($existingReaction) {
            // Si la réaction existe déjà, la mettre à jour
            if ($existingReaction->getReactionType() === $reactionType) {
                // Même réaction → supprimer
                $em->remove($existingReaction);
            } else {
                // Réaction différente → mettre à jour
                $existingReaction->setReactionType($reactionType);
            }
        } else {
            // Sinon, créer une nouvelle réaction
            $reaction = new ReactionComment();
            $reaction->setComment($comment)
                ->setUser($user)
                ->setReactionType($reactionType)
                ->setCreatedAt(new \DateTimeImmutable());

            $em->persist($reaction);
        }

        // Enregistrer les modifications dans la base de données
        $em->flush();

        return new JsonResponse(['success' => true], JsonResponse::HTTP_OK);
    }



}