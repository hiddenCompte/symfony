<?php
// src/Repository/CandidatureRepository.php

namespace App\Repository;

use App\Entity\Candidature;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class CandidatureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Candidature::class);
    }

    public function findAllWithUserAndMission(string $sort = 'default'): array
    {
        $qb = $this->createQueryBuilder('c')
            ->select('c', 'PARTIAL u.{id, prenom, nom}', 'PARTIAL m.{id, titre}')
            ->leftJoin('c.user', 'u')
            ->leftJoin('c.mission', 'm');

        switch ($sort) {
            case 'reponse_asc':
                $qb->orderBy('c.reponseQuestions', 'ASC');
                break;
            case 'reponse_desc':
                $qb->orderBy('c.reponseQuestions', 'DESC');
                break;
            default:
                $qb->orderBy('c.id', 'DESC');
        }

        return $qb->getQuery()->getResult();
    }

    public function findBySearchTerm(string $searchTerm, string $searchBy = 'all'): array
    {
        $qb = $this->createQueryBuilder('c');
        
        $qb->select('c', 'PARTIAL u.{id, prenom, nom}', 'PARTIAL m.{id, titre}')
            ->leftJoin('c.user', 'u')
            ->leftJoin('c.mission', 'm');

        $conditions = [];
        $params = [];

        if ($searchBy === 'user') {
            $conditions[] = $qb->expr()->orX(
                $qb->expr()->like('u.prenom', ':search'),
                $qb->expr()->like('u.nom', ':search')
            );
        } elseif ($searchBy === 'mission') {
            $conditions[] = $qb->expr()->like('m.titre', ':search');
        } elseif ($searchBy === 'response') {
            $conditions[] = $qb->expr()->like('c.reponseQuestions', ':search');
        } else { // all
            $conditions[] = $qb->expr()->orX(
                $qb->expr()->like('u.prenom', ':search'),
                $qb->expr()->like('u.nom', ':search'),
                $qb->expr()->like('m.titre', ':search'),
                $qb->expr()->like('c.reponseQuestions', ':search')
            );
        }

        if (!empty($conditions)) {
            $qb->where($qb->expr()->orX(...$conditions));
            $qb->setParameter('search', '%' . $searchTerm . '%');
        }

        $qb->orderBy('c.id', 'DESC');

        return $qb->getQuery()->getResult();
    }

    public function searchByReponseQuestions(string $search, string $sort = 'default'): array
    {
        $qb = $this->createQueryBuilder('c')
            ->select('c', 'PARTIAL u.{id, prenom, nom}', 'PARTIAL m.{id, titre}')
            ->leftJoin('c.user', 'u')
            ->leftJoin('c.mission', 'm')
            ->where('c.reponseQuestions LIKE :search')
            ->setParameter('search', '%'.$search.'%');

        switch ($sort) {
            case 'reponse_asc':
                $qb->orderBy('c.reponseQuestions', 'ASC');
                break;
            case 'reponse_desc':
                $qb->orderBy('c.reponseQuestions', 'DESC');
                break;
            default:
                $qb->orderBy('c.id', 'DESC');
        }

        return $qb->getQuery()->getResult();
    }

    public function findByUserId(int $userId): array
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.user = :userId')
            ->setParameter('userId', $userId)
            ->getQuery()
            ->getResult();
    }
}