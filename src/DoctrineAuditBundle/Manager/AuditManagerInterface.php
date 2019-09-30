<?php
/**
 * Created by PhpStorm.
 * User: merkulova
 * Date: 11.08.2019
 * Time: 13:58
 */

namespace DH\DoctrineAuditBundle\Manager;

use DH\DoctrineAuditBundle\Configuration\AuditConfigurationInterface;
use DH\DoctrineAuditBundle\Helper\AuditHelperInterface;
use Doctrine\ORM\EntityManager;

interface AuditManagerInterface
{
    public function getConfiguration(): AuditConfigurationInterface;

    public function insert(EntityManager $em, $entity, array $ch): void;

    public function update(EntityManager $em, $entity, array $ch): void;

    public function remove(EntityManager $em, $entity, $id): void;

    public function associate(EntityManager $em, $source, $target, array $mapping): void;

    public function dissociate(EntityManager $em, $source, $target, array $mapping): void;

    public function softDelete(EntityManager $em, $entity): void;

    public function setHelper(AuditHelperInterface $helper): void;

    public function getHelper(): AuditHelperInterface;

    public function collectScheduledInsertions(\Doctrine\ORM\UnitOfWork $uow): void;

    public function collectScheduledUpdates(\Doctrine\ORM\UnitOfWork $uow): void;

    public function collectScheduledDeletions(\Doctrine\ORM\UnitOfWork $uow, EntityManager $em): void;

    public function collectScheduledCollectionUpdates(\Doctrine\ORM\UnitOfWork $uow, EntityManager $em): void;

    public function collectScheduledCollectionDeletions(\Doctrine\ORM\UnitOfWork $uow, EntityManager $em): void;

    public function processInsertions(EntityManager $em, \Doctrine\ORM\UnitOfWork $uow): void;

    public function processUpdates(EntityManager $em, \Doctrine\ORM\UnitOfWork $uow): void;

    public function processAssociations(EntityManager $em): void;

    public function processDissociations(EntityManager $em): void;

    public function processDeletions(EntityManager $em): void;

    public function reset(): void;
}