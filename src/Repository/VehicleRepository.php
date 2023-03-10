<?php

namespace App\Repository;

use App\Entity\Vehicle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Vehicle>
 *
 * @method Vehicle|null find($id, $lockMode = null, $lockVersion = null)
 * @method Vehicle|null findOneBy(array $criteria, array $orderBy = null)
 * @method Vehicle[]    findAll()
 * @method Vehicle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VehicleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Vehicle::class);
    }

    public function save(Vehicle $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Vehicle $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findLikeName(string $name): array
    {
        $queryBuilder = $this->createQueryBuilder('v')
            ->where('v.title LIKE :name')
            ->setParameter('name', '%' . $name . '%')
            ->orderBy('v.title', 'ASC')
            ->getQuery();
        return $queryBuilder->getResult();
    }

    public function findLikeMovieName(string $movieName): array
    {
        $queryBuilder = $this->createQueryBuilder('v')
            ->join('v.film', 'm')
            ->select('v', 'm')
            ->where('m.title LIKE :movieName')
            ->setParameter('movieName', '%' . $movieName . '%')
            ->orderBy('v.title', 'ASC')
            ->getQuery();

        return $queryBuilder->getResult();
    }

    // SELECT * FROM vehicle as v
    // JOIN movie as m ON m.id=v.film_id;

    public function allGamesWithStudios()
    {
        return $this->createQueryBuilder('g')
            ->join('g.studio', 's')
            ->select('g', 's')
            ->andWhere('s.status = 1')
            ->orderBy('s.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    //    /**
    //     * @return Vehicle[] Returns an array of Vehicle objects
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

    //    public function findOneBySomeField($value): ?Vehicle
    //    {
    //        return $this->createQueryBuilder('v')
    //            ->andWhere('v.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
