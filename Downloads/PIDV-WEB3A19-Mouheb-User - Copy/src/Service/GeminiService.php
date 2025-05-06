<?php
// src/Service/GeminiService.php

namespace App\Service;

use Google\GenerativeAI\GenerativeModel;
use Google\GenerativeAI\GoogleGenerativeAI;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpKernel\Exception\ServiceUnavailableHttpException;

class GeminiService
{
    private GoogleGenerativeAI $client;
    private GenerativeModel $model;

    public function __construct(
        #[Autowire('%env(GEMINI_API_KEY)%')]
        #[\SensitiveParameter]
        private string $apiKey
    ) {
        if (empty($this->apiKey)) {
            throw new \RuntimeException('La clé API Gemini n\'est pas configurée');
        }

        $this->client = new GoogleGenerativeAI($this->apiKey);
        $this->model = $this->client->getGenerativeModel('gemini-pro');
    }

    public function generateMotivationLetter(
        string $candidateName,
        string $missionTitle,
        string $skills,
        string $language = 'fr',
        int $wordCount = 300
    ): string {
        try {
            $prompt = <<<PROMPT
            Génère une lettre de motivation professionnelle en $language pour $candidateName.
            Poste: "$missionTitle".
            Compétences: $skills.
            
            Exigences:
            - Structure claire (introduction, développement, conclusion)
            - Environ $wordCount mots
            - Ton professionnel mais convivial
            - Adaptée spécifiquement au poste
            - Mise en valeur des compétences pertinentes
            - Sans formules génériques
            
            Format: Texte brut sans mise en forme.
            PROMPT;

            $response = $this->model->generateContent($prompt);
            return $response->text() ?? '';

        } catch (\Exception $e) {
            throw new ServiceUnavailableHttpException(
                null,
                'Erreur lors de la génération de la lettre: '.$e->getMessage(),
                $e
            );
        }
    }

    public function testApiConnection(): bool
    {
        try {
            $testResponse = $this->model->generateContent('Test connection');
            return (bool) $testResponse->text();
        } catch (\Exception $e) {
            return false;
        }
    }
}