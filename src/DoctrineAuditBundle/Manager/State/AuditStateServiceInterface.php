<?php
/**
 * Created by PhpStorm.
 * User: merkulova
 * Date: 09.10.2019
 * Time: 14:26
 */

namespace DH\DoctrineAuditBundle\Manager\State;

interface AuditStateServiceInterface
{
    /**
     * @param object $entity
     * @param array $changeSet
     * @return string|null
     */
    public function getCurrentState($entity, array $changeSet): ?string;
}