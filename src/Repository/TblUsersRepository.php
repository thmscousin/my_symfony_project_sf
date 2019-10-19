<?php

namespace App\Repository;

use App\Entity\TblUsers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TblUsers|null find($id, $lockMode = null, $lockVersion = null)
 * @method TblUsers|null findOneBy(array $criteria, array $orderBy = null)
 * @method TblUsers[]    findAll()
 * @method TblUsers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblUsersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TblUsers::class);
    }

    // /**
    //  * @return TblUsers[] Returns an array of TblUsers objects
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
    public function findOneBySomeField($value): ?TblUsers
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
