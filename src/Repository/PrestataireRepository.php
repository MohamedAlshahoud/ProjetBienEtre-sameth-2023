<?php

namespace App\Repository;

use App\Entity\Prestataire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Prestataire>
 *
 * @method Prestataire|null find($id, $lockMode = null, $lockVersion = null)
 * @method Prestataire|null findOneBy(array $criteria, array $orderBy = null)
 * @method Prestataire[]    findAll()
 * @method Prestataire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PrestataireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Prestataire::class);
    }

    public function save(Prestataire $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Prestataire $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    
    /**
    * @return Prestataire[] Returns an array of Prestataire objects
    */
   public function findWithSearch($nom,$categorie, $code_postal, $localite, $commune)
   {
       $query = $this->createQueryBuilder('p');
    
       //prestataire
        if($nom != 'all'){
        $query = $query->andWhere('p.nom like :val')
                       ->setParameter('val', "%$nom%");
       }

       //categorie
        if($categorie != 'all'){
            $query = $query->join('p.propose', 'c')
                           ->andWhere('c.id IN (:categorie)')
                           ->setParameter('categorie', $categorie);
        }
        //codePostal
        if($code_postal != 'all'){
            $query = $query->join('p.utilisateur', 'u')
                            ->join('u.codePostal' , 'cp')
                            ->andWhere('cp.id IN (:codePostal)')
                            ->setParameter('codePostal', $code_postal);
        }
        //localite
        if($localite != 'all'){
            $query = $query->join('p.utilisateur', 'u')
                            ->join('u.localite' , 'lo')
                            ->andWhere('lo.id IN (:localite)')
                            ->setParameter('localite', $localite);
        }
        //commune
        if($commune != 'all'){
            $query = $query->join('p.utilisateur', 'u')
                            ->join('u.commune' , 'm')
                            ->andWhere('m.id IN (:commune)')
                            ->setParameter('commune', $commune);
        }
    
       return $query->getQuery()->getResult();
   }


}

