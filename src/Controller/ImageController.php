<?php

// src/Controller/ImageController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ImageController extends AbstractController
{
    #[Route('/image/{path}', name: 'app_serve_image', requirements: ['path' => '.+'])]
    public function serveImage(string $path): Response
    {
        // Décodez le chemin URL-encodé
        $decodedPath = urldecode($path);
        
        // Supprimez le préfixe "file:" si présent
        $filePath = str_replace('file:', '', $decodedPath);
        
        // Vérifiez si le fichier existe
        if (!file_exists($filePath)) {
            throw $this->createNotFoundException('Image non trouvée');
        }
        
        // Servez le fichier
        return new BinaryFileResponse($filePath);
    }
}
