<?php
// src/Controller/ApiController.php
namespace App\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use GuzzleHttp\Client;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class ApiGemini extends AbstractController
{
    #[Route('/api/generate-content', name: 'generate_content', methods: ['GET','POST'])]
    public function generateContent(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $title = $data['title'] ?? '';


        if (!$title) {
            return new JsonResponse(['error' => 'Titre manquant'], 400);
        }

        $apiKey = $_ENV['GEMINI_KEY'];

        $response = $this->callGemini($title, $apiKey);

        return new JsonResponse(['content' => $response]);
    }

    private function callGemini(string $title, string $apiKey): string
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->post("https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key={$apiKey}", [
            'json' => [
                'contents' => [[
                    'parts' => [[
                        'text' => "Rédige un petit contenu engageant pour ce titre de publication : \"$title\""
                    ]]
                ]]
            ]
        ]);

        $body = json_decode($response->getBody()->getContents(), true);

        return $body['candidates'][0]['content']['parts'][0]['text'] ?? 'Aucune suggestion.';
    }
}
