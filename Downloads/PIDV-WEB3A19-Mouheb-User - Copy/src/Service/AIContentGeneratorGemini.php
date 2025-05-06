<?php
// src/Service/AIContentGeneratorGemini.php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class AIContentGeneratorGemini
{
    private $client;
    private $apiKey;

    public function __construct(HttpClientInterface $client, string $apiKey)
    {
        $this->client = $client;
        $this->apiKey = $apiKey;
    }

    public function generateMotivationLetter(array $userData): string
    {
        $prompt = $this->generatePrompt($userData);

        $response = $this->client->request('POST', 'https://gemini.googleapis.com/v1/generate', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'model' => 'gemini-model-v1', // Remplacez par le modèle de Gemini que vous utilisez
                'input' => $prompt,
                'parameters' => [
                    'max_tokens' => 500,
                    'temperature' => 0.7,
                ],
            ],
        ]);

        $content = $response->toArray();

        return $content['generated_text'] ?? 'Erreur de génération de texte';
    }

    private function generatePrompt(array $userData): string
    {
        return sprintf(
            "Rédigez une lettre de motivation pour un candidat qui s'appelle %s. Le poste souhaité est %s. Ses compétences incluent %s. Il/Elle a de l'expérience dans %s. La lettre doit être professionnelle et exprimer son intérêt pour le poste.",
            $userData['name'],
            $userData['job'],
            $userData['skills'],
            $userData['experience']
        );
    }
}
