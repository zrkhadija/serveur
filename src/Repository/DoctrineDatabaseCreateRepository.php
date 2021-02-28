<?php

namespace App\Repository;

use App\Entity\DoctrineDatabaseCreate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DoctrineDatabaseCreate|null find($id, $lockMode = null, $lockVersion = null)
 * @method DoctrineDatabaseCreate|null findOneBy(array $criteria, array $orderBy = null)
 * @method DoctrineDatabaseCreate[]    findAll()
 * @method DoctrineDatabaseCreate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DoctrineDatabaseCreateRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DoctrineDatabaseCreate::class);
    }

    // /**
    //  * @return DoctrineDatabaseCreate[] Returns an array of DoctrineDatabaseCreate objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DoctrineDatabaseCreate
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
