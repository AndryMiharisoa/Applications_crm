<?php

namespace App\Repository;

use App\Entity\VicidialList;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<VicidialList>
 *
 * @method VicidialList|null find($id, $lockMode = null, $lockVersion = null)
 * @method VicidialList|null findOneBy(array $criteria, array $orderBy = null)
 * @method VicidialList[]    findAll()
 * @method VicidialList[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VicidialListRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VicidialList::class);
    }

//    /**
//     * @return VicidialList[] Returns an array of VicidialList objects
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

//    public function findOneBySomeField($value): ?VicidialList
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
