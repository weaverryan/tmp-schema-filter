<?php

namespace App\Repository;

use App\Entity\GentleJellybean;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method GentleJellybean|null find($id, $lockMode = null, $lockVersion = null)
 * @method GentleJellybean|null findOneBy(array $criteria, array $orderBy = null)
 * @method GentleJellybean[]    findAll()
 * @method GentleJellybean[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GentleJellybeanRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GentleJellybean::class);
    }

    // /**
    //  * @return GentleJellybean[] Returns an array of GentleJellybean objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GentleJellybean
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
