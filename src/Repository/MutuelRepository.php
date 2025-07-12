<?php

namespace App\Repository;

use App\Entity\Mutuel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Mutuel|null find($id, $lockMode = null, $lockVersion = null)
 * @method Mutuel|null findOneBy(array $criteria, array $orderBy = null)
 * @method Mutuel[]    findAll()
 * @method Mutuel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MutuelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Mutuel::class);
    }

    // /**
    //  * @return Mutuel[] Returns an array of Mutuel objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Mutuel
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
