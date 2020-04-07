<?php

namespace App\Repository;

use App\Entity\NationPartis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method NationPartis|null find($id, $lockMode = null, $lockVersion = null)
 * @method NationPartis|null findOneBy(array $criteria, array $orderBy = null)
 * @method NationPartis[]    findAll()
 * @method NationPartis[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NationPartisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NationPartis::class);
    }

    // /**
    //  * @return NationPartis[] Returns an array of NationPartis objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NationPartis
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
