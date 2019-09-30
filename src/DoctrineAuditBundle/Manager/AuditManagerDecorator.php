<?php
/**
 * Created by PhpStorm.
 * User: merkulova
 * Date: 02.09.2019
 * Time: 15:24
 */

namespace DH\DoctrineAuditBundle\Manager;

use DH\DoctrineAuditBundle\Configuration\AuditConfigurationInterface;
use DH\DoctrineAuditBundle\Helper\AuditHelperInterface;
use Doctrine\ORM\EntityManager;

class AuditManagerDecorator implements AuditManagerInterface
{
    /**
     * @var AuditManagerInterface
     */
    protected $wrapper;

    public function __construct(AuditManagerInterface $wrapper)
    {
        $this->wrapper = $wrapper;
    }

    public function update(EntityManager $em, $entity, array $ch): void
    {
        $this->wrapper->update($em, $entity, $ch);
    }

    public function associate(EntityManager $em, $source, $target, array $mapping): void
    {
        $this->wrapper->associate($em, $source, $target, $mapping);
    }

    public function collectScheduledCollectionDeletions(\Doctrine\ORM\UnitOfWork $uow, EntityManager $em): void
    {
        $this->wrapper->collectScheduledCollectionDeletions($uow, $em);
    }

    public function collectScheduledCollectionUpdates(\Doctrine\ORM\UnitOfWork $uow, EntityManager $em): void
    {
        $this->wrapper->collectScheduledCollectionUpdates($uow, $em);
    }

    public function collectScheduledDeletions(\Doctrine\ORM\UnitOfWork $uow, EntityManager $em): void
    {
        $this->wrapper->collectScheduledCollectionDeletions($uow, $em);
    }

    public function collectScheduledInsertions(\Doctrine\ORM\UnitOfWork $uow): void
    {
        $this->wrapper->collectScheduledInsertions($uow);
    }

    public function collectScheduledUpdates(\Doctrine\ORM\UnitOfWork $uow): void
    {
        $this->wrapper->collectScheduledUpdates($uow);
    }

    public function dissociate(EntityManager $em, $source, $target, array $mapping): void
    {
        $this->wrapper->dissociate($em, $source, $target, $mapping);
    }

    public function getConfiguration(): AuditConfigurationInterface
    {
        return $this->wrapper->getConfiguration();
    }

    public function getHelper(): AuditHelperInterface
    {
        return $this->wrapper->getHelper();
    }

    public function insert(EntityManager $em, $entity, array $ch): void
    {
        $this->wrapper->insert($em, $entity, $ch);
    }

    public function processAssociations(EntityManager $em): void
    {
        $this->wrapper->processAssociations($em);
    }

    public function processDeletions(EntityManager $em): void
    {
        $this->processDeletions($em);
    }

    public function processDissociations(EntityManager $em): void
    {
        $this->wrapper->processDissociations($em);
    }

    public function processInsertions(EntityManager $em, \Doctrine\ORM\UnitOfWork $uow): void
    {
        $this->wrapper->processInsertions($em, $uow);
    }

    public function processUpdates(EntityManager $em, \Doctrine\ORM\UnitOfWork $uow): void
    {
        $this->wrapper->processUpdates($em, $uow);
    }

    public function remove(EntityManager $em, $entity, $id): void
    {
        $this->wrapper->remove($em, $entity, $id);
    }

    public function reset(): void
    {
        $this->wrapper->reset();
    }

    public function setHelper(AuditHelperInterface $helper): void
    {
        $this->wrapper->setHelper($helper);
    }

    public function softDelete(EntityManager $em, $entity): void
    {
        $this->wrapper->softDelete($em, $entity);
    }
}