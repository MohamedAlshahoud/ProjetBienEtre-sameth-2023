<?php

namespace App\Repository;

use App\Entity\Internaute;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Internaute>
 *
 * @method Internaute|null find($id, $lockMode = null, $lockVersion = null)
 * @method Internaute|null findOneBy(array $criteria, array $orderBy = null)
 * @method Internaute[]    findAll()
 * @method Internaute[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InternauteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Internaute::class);
    }

    public function save(Internaute $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Internaute $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
