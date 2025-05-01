<?php

namespace App\Controller;

use App\Entity\Publication;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\PublicationType;
use App\Repository\PublicationRepository;
final class GPublicationController extends AbstractController
{
    
    #[Route('/app' ,name: 'app', methods: ['GET'])]
public function indexxx(): Response
    {
        return $this->render('frontoffice/iLanding/index.html.twig'
            
        );
}

    #[Route('/home' ,name: 'home', methods: ['GET'])]
public function index(PublicationRepository $publicationRepository): Response
    {
        return $this->render('frontoffice/acceuil.html.twig', [
            'publications' => $publicationRepository->findAll(),
        ]); 
}
}
