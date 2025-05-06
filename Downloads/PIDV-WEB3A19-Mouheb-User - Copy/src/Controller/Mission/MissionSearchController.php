<?php
// src/Controller/MissionSearchController.php
namespace App\Controller\Mission;

use App\Repository\MissionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MissionSearchController extends AbstractController
{
    #[Route('/mission/search', name: 'app_mission_search', methods: ['GET'])]
    public function search(Request $request, MissionRepository $missionRepository): JsonResponse
    {
        $query = $request->query->get('q', '');
        $missions = $missionRepository->searchByEnterpriseName($query);

        $results = [];
        foreach ($missions as $mission) {
            $results[] = [
                'id' => $mission->getId(),
                'text' => $mission->getNomEntreprise(),
                'url' => $this->generateUrl('app_mission_show', ['id' => $mission->getId()])
            ];
        }

        return $this->json($results);
    }

    #[Route('/mission/advanced-search', name: 'app_mission_advanced_search', methods: ['POST'])]
    public function advancedSearch(Request $request, MissionRepository $missionRepository): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        
        $results = $missionRepository->findByMultipleCriteria([
            'entreprise' => $data['entreprise'] ?? null,
            'competence' => $data['competence'] ?? null
        ]);

        $formattedResults = [];
        foreach ($results as $mission) {
            $formattedResults[] = [
                'id' => $mission->getId(),
                'titre' => $mission->getTitre(),
                'entreprise' => $mission->getNomEntreprise(),
                'url' => $this->generateUrl('app_mission_show', ['id' => $mission->getId()])
            ];
        }

        return $this->json($formattedResults);
    }
}