<?php

namespace App\Repository;

use App\Entity\Encadrement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Encadrement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Encadrement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Encadrement[]    findAll()
 * @method Encadrement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EncadrementRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Encadrement::class);
    }

    // /**
    //  * @return Encadrement[] Returns an array of Encadrement objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Encadrement
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
