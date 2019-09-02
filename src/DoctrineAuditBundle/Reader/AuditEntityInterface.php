<?php
/**
 * Created by PhpStorm.
 * User: merkulova
 * Date: 30.08.2019
 * Time: 17:13
 */

namespace DH\DoctrineAuditBundle\Reader;

interface AuditEntityInterface
{
    public function getDiffs(): ?array;
}