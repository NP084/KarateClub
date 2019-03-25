<?php

namespace App\Repository;

use App\Entity\UserConnected;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method UserConnected|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserConnected|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserConnected[]    findAll()
 * @method UserConnected[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserConnectedRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, UserConnected::class);
    }

    // /**
    //  * @return UserConnected[] Returns an array of UserConnected objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserConnected
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
