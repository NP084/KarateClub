<?php

namespace App\Repository;

use App\Entity\Preregistration;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Preregistration|null find($id, $lockMode = null, $lockVersion = null)
 * @method Preregistration|null findOneBy(array $criteria, array $orderBy = null)
 * @method Preregistration[]    findAll()
 * @method Preregistration[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PreregistrationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Preregistration::class);
    }

    // /**
    //  * @return Preregistration[] Returns an array of Preregistration objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Preregistration
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
