<?php
/**
 * Created by PhpStorm.
 * User: merkulova
 * Date: 02.09.2019
 * Time: 15:13
 */

namespace DH\DoctrineAuditBundle\Reader;

class AuditReaderDecorator implements AuditReaderInterface
{
    /**
     * @var AuditReaderInterface
     */
    protected $wrapped;

    public function __construct(AuditReaderInterface $wrapped)
    {
        $this->wrapped = $wrapped;
    }

    public function getAudit($entity, $id)
    {
        return $this->wrapped->getAudit($entity, $id);
    }

    public function getAudits($entity, $id = null, ?int $page = null, ?int $pageSize = null): array
    {
        return $this->wrapped->getAudits($entity, $id, $page, $pageSize);
    }

    public function getAuditsCount($entity, $id = null): int
    {
        return $this->wrapped->getAuditsCount($entity, $id);
    }

    public function getEntities(): array
    {
        return $this->wrapped->getEntities();
    }

    public function getEntityTableName($entity): string
    {
        return $this->wrapped->getEntityTableName($entity);
    }
}