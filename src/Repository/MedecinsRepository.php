<?php

namespace App\Repository;

use App\Entity\Medecins;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Medecins|null find($id, $lockMode = null, $lockVersion = null)
 * @method Medecins|null findOneBy(array $criteria, array $orderBy = null)
 * @method Medecins[]    findAll()
 * @method Medecins[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
 class MedecinsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Medecins::class);
    }

}