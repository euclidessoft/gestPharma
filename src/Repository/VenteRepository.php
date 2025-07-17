<?php

namespace App\Repository;

use App\Entity\Vente;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Vente|null find($id, $lockMode = null, $lockVersion = null)
 * @method Vente|null findOneBy(array $criteria, array $orderBy = null)
 * @method Vente[]    findAll()
 * @method Vente[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VenteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Vente::class);
    }

    public function factureMoisPrecedent($mutuel)
    {
        $start = new \DateTime('first day of last month');
        $end = new \DateTime('last day of last month');
        return $this->createQueryBuilder('p')
            ->andWhere('p.date BETWEEN :start AND :end')
            ->andWhere('p.mutuel = :mutuel')
            ->setParameter('start' , $start)
            ->setParameter('end' , $end)
            ->setParameter('mutuel' , $mutuel)
            ->getQuery()
            ->getResult();
    }
    public function factureMois($mutuel)
    {
        $start = new \DateTime('first day of this month');
        $end = new \DateTime('last day of this month');
        return $this->createQueryBuilder('p')
            ->andWhere('p.date BETWEEN :start AND :end')
            ->andWhere('p.mutuel = :mutuel')
            ->setParameter('start' , $start)
            ->setParameter('end' , $end)
            ->setParameter('mutuel' , $mutuel)
            ->getQuery()
            ->getResult();
    }
}
