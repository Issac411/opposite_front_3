<?php

namespace App\Repository;

use App\Entity\TraitElement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TraitElement|null find($id, $lockMode = null, $lockVersion = null)
 * @method TraitElement|null findOneBy(array $criteria, array $orderBy = null)
 * @method TraitElement[]    findAll()
 * @method TraitElement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TraitElementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TraitElement::class);
    }

    // /**
    //  * @return TraitElement[] Returns an array of TraitElement objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TraitElement
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
