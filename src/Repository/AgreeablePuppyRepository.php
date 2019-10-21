<?php

namespace App\Repository;

use App\Entity\AgreeablePuppy;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AgreeablePuppy|null find($id, $lockMode = null, $lockVersion = null)
 * @method AgreeablePuppy|null findOneBy(array $criteria, array $orderBy = null)
 * @method AgreeablePuppy[]    findAll()
 * @method AgreeablePuppy[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AgreeablePuppyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AgreeablePuppy::class);
    }

    // /**
    //  * @return AgreeablePuppy[] Returns an array of AgreeablePuppy objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AgreeablePuppy
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
