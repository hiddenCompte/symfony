<?php

namespace App\Controller;

use App\Entity\Publication;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GPublicationController extends AbstractController
{
    #[Route('/g/publication', name: 'app_g_publication')]
    public function index(): Response
    {
        return  $this->render('navbar.html.twig'
       ); 
    }
   
}
