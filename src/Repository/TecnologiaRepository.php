<?php

namespace App\Repository;

use App\Entity\Tecnologia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Tecnologia|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tecnologia|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tecnologia[]    findAll()
 * @method Tecnologia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TecnologiaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Tecnologia::class);
    }

    // /**
    //  * @return Tecnologia[] Returns an array of Tecnologia objects
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
    public function findOneBySomeField($value): ?Tecnologia
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
