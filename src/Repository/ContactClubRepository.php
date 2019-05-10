<?php

namespace App\Repository;

use App\Entity\ContactClub;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ContactClub|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContactClub|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContactClub[]    findAll()
 * @method ContactClub[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContactClubRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ContactClub::class);
    }

    // /**
    //  * @return ContactClub[] Returns an array of ContactClub objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ContactClub
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
