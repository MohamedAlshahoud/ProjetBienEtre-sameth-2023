<?php

namespace App\Repository;

use App\Entity\CodePostal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CodePostal>
 *
 * @method CodePostal|null find($id, $lockMode = null, $lockVersion = null)
 * @method CodePostal|null findOneBy(array $criteria, array $orderBy = null)
 * @method CodePostal[]    findAll()
 * @method CodePostal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CodePostalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CodePostal::class);
    }

    public function save(CodePostal $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CodePostal $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
