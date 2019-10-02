<?php
/**
 * Created by PhpStorm.
 * User: merkulova
 * Date: 02.10.2019
 * Time: 18:47
 */

namespace DH\DoctrineAuditBundle\Manager\Context;

interface AuditContextServiceInterface
{
    public function getCurrentContext(): ?string;
}