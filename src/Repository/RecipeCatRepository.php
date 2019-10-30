<?php

namespace App\Repository;

use App\Entity\RecipeCat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method RecipeCat|null find($id, $lockMode = null, $lockVersion = null)
 * @method RecipeCat|null findOneBy(array $criteria, array $orderBy = null)
 * @method RecipeCat[]    findAll()
 * @method RecipeCat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RecipeCatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RecipeCat::class);
    }

    // /**
    //  * @return RecipeCat[] Returns an array of RecipeCat objects
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

    /*
    public function findOneBySomeField($value): ?RecipeCat
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
