<?php
/**
 * Created by PhpStorm.
 * User: merkulova
 * Date: 11.08.2019
 * Time: 14:16
 */

namespace DH\DoctrineAuditBundle\Reader;


interface AuditReaderInterface
{
    public function getEntities(): array;

    public function getAudits($entity, $id = null, ?int $page = null, ?int $pageSize = null): array;

    public function getAuditsCount($entity, $id = null): int;

    public function getAudit($entity, $id);

    public function getEntityTableName($entity): string;

    public function getContextAudits(string $context): array;

    public function getContextAudit($entity, string $context): array;

}