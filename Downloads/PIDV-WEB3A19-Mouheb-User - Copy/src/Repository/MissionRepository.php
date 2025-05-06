<?php
// src/Repository/MissionRepository.php
namespace App\Repository;

use App\Entity\Mission;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Mission>
 */
class MissionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Mission::class);
    }

    public function searchByEnterpriseName(?string $query, array $orderBy = null): array
    {
        $qb = $this->createQueryBuilder('m');
        
        if ($query) {
            $qb->where('m.nomEntreprise LIKE :query')
               ->setParameter('query', '%'.$query.'%');
        }

        if ($orderBy) {
            foreach ($orderBy as $sort => $direction) {
                $qb->addOrderBy('m.'.$sort, $direction);
            }
        } else {
            $qb->orderBy('m.nomEntreprise', 'ASC');
        }

        return $qb->getQuery()->getResult();
    }

    public function findByMultipleCriteria(array $criteria): array
    {
        $qb = $this->createQueryBuilder('m');
        
        if (!empty($criteria['entreprise'])) {
            $qb->andWhere('m.nomEntreprise LIKE :entreprise')
               ->setParameter('entreprise', '%'.$criteria['entreprise'].'%');
        }
        
        if (!empty($criteria['competence'])) {
            $qb->andWhere('m.competance LIKE :competence')
               ->setParameter('competence', '%'.$criteria['competence'].'%');
        }

        return $qb->getQuery()->getResult();
    }
    
    


}