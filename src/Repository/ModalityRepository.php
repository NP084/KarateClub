<?php

namespace App\Repository;

use App\Entity\Modality;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Modality|null find($id, $lockMode = null, $lockVersion = null)
 * @method Modality|null findOneBy(array $criteria, array $orderBy = null)
 * @method Modality[]    findAll()
 * @method Modality[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModalityRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Modality::class);
    }

    // /**
    //  * @return Modality[] Returns an array of Modality objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Modality
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
