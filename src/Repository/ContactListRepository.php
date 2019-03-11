<?php

namespace App\Repository;

use App\Entity\ContactList;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ContactList|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContactList|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContactList[]    findAll()
 * @method ContactList[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContactListRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ContactList::class);
    }

    // /**
    //  * @return ContactList[] Returns an array of ContactList objects
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
    public function findOneBySomeField($value): ?ContactList
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
