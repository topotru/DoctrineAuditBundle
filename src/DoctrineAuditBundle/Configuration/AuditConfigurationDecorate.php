<?php
/**
 * Created by PhpStorm.
 * User: merkulova
 * Date: 01.10.2019
 * Time: 1:08
 */

namespace DH\DoctrineAuditBundle\Configuration;

use DH\DoctrineAuditBundle\User\UserProviderInterface;
use Symfony\Bundle\SecurityBundle\Security\FirewallMap;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\HttpFoundation\RequestStack;

class AuditConfigurationDecorate implements AuditConfigurationInterface
{
    /**
     * @var AuditConfigurationInterface
     */
    protected $wrapped;

    /**
     * @var Command
     */
    protected $command;

    public function __construct(AuditConfigurationInterface $wrapped, Command $command)
    {
        $this->wrapped = $wrapped;
        $this->command = $command;
    }

    public function getCommand(): Command
    {
        return $this->command;
    }

    public function isAudited($entity): bool
    {
        return $this->wrapped->isAudited($entity);
    }

    public function disable(): AuditConfigurationInterface
    {
        return $this->wrapped->disable();
    }

    public function disableAuditFor(string $entity): AuditConfigurationInterface
    {
        return $this->wrapped->disableAuditFor($entity);
    }

    public function enable(): AuditConfigurationInterface
    {
        return $this->wrapped->enable();
    }

    public function enableAuditFor(string $entity): AuditConfigurationInterface
    {
        return $this->wrapped->enableAuditFor($entity);
    }

    public function getEntities(): array
    {
        return $this->wrapped->getEntities();
    }

    public function getFirewallMap(): FirewallMap
    {
        return $this->wrapped->getFirewallMap();
    }

    public function getIgnoredColumns(): array
    {
        return $this->wrapped->getIgnoredColumns();
    }

    public function getRequestStack(): RequestStack
    {
        return $this->wrapped->getRequestStack();
    }

    public function getTablePrefix(): string
    {
        return $this->wrapped->getTablePrefix();
    }

    public function getTableSuffix(): string
    {
        return $this->wrapped->getTableSuffix();
    }

    public function getUserProvider(): ?UserProviderInterface
    {
        return $this->wrapped->getUserProvider();
    }

    public function isAuditable($entity): bool
    {
        return $this->wrapped->isAuditable($entity);
    }

    public function isAuditedField($entity, string $field): bool
    {
        return $this->wrapped->isAuditedField($entity, $field);
    }

    public function isEnabled(): bool
    {
        return $this->wrapped->isEnabled();
    }
}