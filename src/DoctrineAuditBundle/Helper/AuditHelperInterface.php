<?php
/**
 * Created by PhpStorm.
 * User: merkulova
 * Date: 11.08.2019
 * Time: 14:08
 */

namespace DH\DoctrineAuditBundle\Helper;

use DH\DoctrineAuditBundle\AuditConfiguration;
use Doctrine\ORM\EntityManager;

interface AuditHelperInterface
{
    public function getConfiguration(): AuditConfiguration;

    public function id(EntityManager $em, $entity);

    public function diff(EntityManager $em, $entity, array $ch): array;

    public function blame(): array;

    public function summarize(EntityManager $em, $entity = null, $id = null): ?array;

    public function getAuditTableColumns(): array;

    public function getAuditTableIndices(string $tablename): array;

    public static function paramToNamespace(string $entity): string;

    public static function namespaceToParam(string $entity): string;
}