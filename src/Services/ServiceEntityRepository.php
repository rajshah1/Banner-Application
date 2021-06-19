<?php
declare(strict_types=1);

namespace App;


use App\Services\DoctrineInterface;
use \Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository as BaseServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use UnexpectedValueException;
use \Doctrine\ORM\ORMException;

/**
 * Class ServiceEntityRepository
 * @package App
 */
abstract class ServiceEntityRepository extends BaseServiceEntityRepository
{
    /**
     * @var string
     */
    protected const ENTITY_CLASS = null;

    /**
     * ServiceEntityRepository constructor.
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        if (!static::ENTITY_CLASS) {
            throw new UnexpectedValueException('Missing the required ENTITY_CLASS definition');
        }
        parent::__construct($registry, static::ENTITY_CLASS);
    }


    /**
     * @note Common Doctrine Operations Delete, Save, Update
     */

    /**
     * @param DoctrineInterface $entity
     * @return $this
     * @throws ORMException
     */
    public function delete(DoctrineInterface $entity): ServiceEntityRepository
    {
        $this->getEntityManager()->remove($entity);
        return $this;
    }


    /**
     * @param \App\Services\DoctrineInterface $entity
     * @return $this
     * @throws ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function save(DoctrineInterface  $entity):ServiceEntityRepository
    {
        $this->getEntityManager()->persist($entity);
        $this->getEntityManager()->flush();
        return $this;
    }
}