<?php

namespace App\Repository;

use App\Entity\Registration;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Registration|null find($id, $lockMode = null, $lockVersion = null)
 * @method Registration|null findOneBy(array $criteria, array $orderBy = null)
 * @method Registration[]    findAll()
 * @method Registration[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RegistrationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Registration::class);
    }

    // /**
    //  * @return Registration[] Returns an array of Registration objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /**
    * @return Registration[] Returns an array of Registration objects
    */
    public function findByValidateRegistration()
    {
        return $this->createQueryBuilder('r')
            ->where('r.validateRegistration_date > :annee')
            ->setParameter('annee', new \DateTime('2019-01-01'))
            ->orderBy('r.validateRegistration_date', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

    /**
    * @return Registration[] Returns an array of Registration objects
    */
    public function findByEditRegistration($id)
    {
        return $this->createQueryBuilder('r')
            ->where('r.id = :id')
            ->setParameter('id', $id)
            ->andWhere('r.validateRegistration_date > :annee')
            ->setParameter('annee', new \DateTime('2019-01-01'))
            ->getQuery()
            ->getResult()
        ;
    }

    /*
    public function findOneBySomeField($value): ?Registration
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function findOneByTitle($value): ?Registration
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.title = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

}
