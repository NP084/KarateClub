<?php

namespace App\Repository;

use App\Entity\TimePeriod;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TimePeriod|null find($id, $lockMode = null, $lockVersion = null)
 * @method TimePeriod|null findOneBy(array $criteria, array $orderBy = null)
 * @method TimePeriod[]    findAll()
 * @method TimePeriod[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TimePeriodRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TimePeriod::class);
    }

    // /**
    //  * @return TimePeriod[] Returns an array of TimePeriod objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TimePeriod
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
