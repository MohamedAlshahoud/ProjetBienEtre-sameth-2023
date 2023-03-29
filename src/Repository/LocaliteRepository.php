<?php

namespace App\Repository;

use App\Entity\Localite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Localite>
 *
 * @method Localite|null find($id, $lockMode = null, $lockVersion = null)
 * @method Localite|null findOneBy(array $criteria, array $orderBy = null)
 * @method Localite[]    findAll()
 * @method Localite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LocaliteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Localite::class);
    }

    public function save(Localite $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Localite $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
