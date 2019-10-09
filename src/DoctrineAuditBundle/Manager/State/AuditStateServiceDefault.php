<?php
/**
 * Created by PhpStorm.
 * User: merkulova
 * Date: 09.10.2019
 * Time: 14:30
 */

namespace DH\DoctrineAuditBundle\Manager\State;

class AuditStateServiceDefault implements AuditStateServiceInterface
{
    /**
     * @param object $entity
     * @param array $changeSet
     * @return string|null
     */
    public function getCurrentState($entity, array $changeSet): ?string
    {
        return null;
    }
}