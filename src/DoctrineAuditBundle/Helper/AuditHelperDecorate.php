<?php
/**
 * Created by PhpStorm.
 * User: merkulova
 * Date: 01.10.2019
 * Time: 1:20
 */

namespace DH\DoctrineAuditBundle\Helper;

use DH\DoctrineAuditBundle\Configuration\AuditConfigurationInterface;
use Doctrine\ORM\EntityManager;

class AuditHelperDecorate implements AuditHelperInterface
{
    /**
     * @var AuditHelperInterface
     */
    protected $wrapped;

    public function __construct(AuditHelperInterface $wrapped)
    {
        $this->wrapped = $wrapped;
    }

    public function blame(): array
    {
        $blame = $this->wrapped->blame();

        if ($command = $this->wrapped->getConfiguration()->getCommand())
        {
            $blame['command'] = $command->getName();
        }

        return $blame;
    }

    public function diff(EntityManager $em, $entity, array $ch): array
    {
        return $this->wrapped->diff($em, $entity, $ch);
    }

    public function getAuditTableColumns(): array
    {
        return $this->wrapped->getAuditTableColumns();
    }

    public function getAuditTableIndices(string $tablename): array
    {
        return $this->wrapped->getAuditTableIndices($tablename);
    }

    public function getConfiguration(): AuditConfigurationInterface
    {
        return $this->wrapped->getConfiguration();
    }

    public function id(EntityManager $em, $entity)
    {
        return $this->wrapped->id($em, $entity);
    }

    public function summarize(EntityManager $em, $entity = null, $id = null): ?array
    {
        return $this->wrapped->summarize($em, $entity, $id);
    }

    public static function namespaceToParam(string $entity): string
    {
        return AuditHelper::namespaceToParam($entity);
    }

    public static function paramToNamespace(string $entity): string
    {
        return AuditHelper::paramToNamespace($entity);
    }
}