<?php

namespace App\Repository;

use App\Entity\EspritNational;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method EspritNational|null find($id, $lockMode = null, $lockVersion = null)
 * @method EspritNational|null findOneBy(array $criteria, array $orderBy = null)
 * @method EspritNational[]    findAll()
 * @method EspritNational[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EspritNationalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EspritNational::class);
    }

    // /**
    //  * @return EspritNational[] Returns an array of EspritNational objects
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
    public function findOneBySomeField($value): ?EspritNational
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
