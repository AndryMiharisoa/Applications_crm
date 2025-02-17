<?php

namespace App\Repository;

use App\Entity\VicidialUsers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<VicidialUsers>
 *
 * @method VicidialUsers|null find($id, $lockMode = null, $lockVersion = null)
 * @method VicidialUsers|null findOneBy(array $criteria, array $orderBy = null)
 * @method VicidialUsers[]    findAll()
 * @method VicidialUsers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VicidialUsersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VicidialUsers::class);
    }

//    /**
//     * @return VicidialUsers[] Returns an array of VicidialUsers objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('v.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?VicidialUsers
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
