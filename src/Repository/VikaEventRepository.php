<?php

namespace App\Repository;

use App\Entity\VikaEvent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method VikaEvent|null find($id, $lockMode = null, $lockVersion = null)
 * @method VikaEvent|null findOneBy(array $criteria, array $orderBy = null)
 * @method VikaEvent[]    findAll()
 * @method VikaEvent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VikaEventRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, VikaEvent::class);
    }

    // /**
    //  * @return VikaEvent[] Returns an array of VikaEvent objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?VikaEvent
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
