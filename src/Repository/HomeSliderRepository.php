<?php

namespace App\Repository;

use App\Entity\HomeSlider;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<HomeSlider>
 *
 * @method HomeSlider|null find($id, $lockMode = null, $lockVersion = null)
 * @method HomeSlider|null findOneBy(array $criteria, array $orderBy = null)
 * @method HomeSlider[]    findAll()
 * @method HomeSlider[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HomeSliderRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HomeSlider::class);
    }

    public function save(HomeSlider $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(HomeSlider $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
