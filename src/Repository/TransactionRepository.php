<?php

namespace App\Repository;

use App\Entity\Product;
use App\Entity\Transaction;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method Transaction|null find($id, $lockMode = null, $lockVersion = null)
 * @method Transaction|null findOneBy(array $criteria, array $orderBy = null)
 * @method Transaction[]    findAll()
 * @method Transaction[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TransactionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Transaction::class);
    }

    public function findAll()
    {
        return $this->findBy(array(), array('creationDate' => 'DESC'));
    }

    // /**
    //  * @return Transaction[] Returns an array of Transaction objects
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

    /* public function findBalanceByProduct(Product $product)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.product = :val')
            ->setParameter('val', $product)
            ->select('SUM(t.amount) as balance')
            ->getQuery()
            ->getOneOrNullResult()
        ;
    } */
}
