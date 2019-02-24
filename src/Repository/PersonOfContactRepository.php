<?php

namespace App\Repository;

use App\Entity\PersonOfContact;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PersonOfContact|null find($id, $lockMode = null, $lockVersion = null)
 * @method PersonOfContact|null findOneBy(array $criteria, array $orderBy = null)
 * @method PersonOfContact[]    findAll()
 * @method PersonOfContact[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PersonOfContactRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PersonOfContact::class);
    }

    // /**
    //  * @return PersonOfContact[] Returns an array of PersonOfContact objects
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
    public function findOneBySomeField($value): ?PersonOfContact
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
