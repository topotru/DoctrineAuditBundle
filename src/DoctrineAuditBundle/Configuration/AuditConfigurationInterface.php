<?php
/**
 * Created by PhpStorm.
 * User: merkulova
 * Date: 30.09.2019
 * Time: 19:00
 */

namespace DH\DoctrineAuditBundle\Configuration;

use DH\DoctrineAuditBundle\User\UserProviderInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\SecurityBundle\Security\FirewallMap;

interface AuditConfigurationInterface
{

    public function enable(): self;

    public function disable(): self;

    public function isEnabled(): bool;

    public function isAuditable($entity): bool;

    public function isAudited($entity): bool;

    public function isAuditedField($entity, string $field): bool;

    public function getTablePrefix(): string;

    public function getTableSuffix(): string;

    public function getIgnoredColumns(): array;

    public function getEntities(): array;

    public function enableAuditFor(string $entity): self;

    public function disableAuditFor(string $entity): self;

    public function getUserProvider(): ?UserProviderInterface;

    public function getRequestStack(): RequestStack;

    public function getCommand(): Command;

    public function getFirewallMap(): FirewallMap;
}

