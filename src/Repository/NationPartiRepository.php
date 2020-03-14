<?php

namespace App\Repository;

use App\Entity\NationParti;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method NationParti|null find($id, $lockMode = null, $lockVersion = null)
 * @method NationParti|null findOneBy(array $criteria, array $orderBy = null)
 * @method NationParti[]    findAll()
 * @method NationParti[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NationPartiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NationParti::class);
    }

    // /**
    //  * @return NationParti[] Returns an array of NationParti objects
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
    public function findOneBySomeField($value): ?NationParti
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
