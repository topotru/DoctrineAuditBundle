<?php
/**
 * Created by PhpStorm.
 * User: merkulova
 * Date: 30.09.2019
 * Time: 18:51
 */

namespace DH\DoctrineAuditBundle\Reader;

class AuditEntityDecorate extends AuditEntry
{
    /**
     * @var string
     */
    protected $uri;

    /**
     * @var string
     */
    protected $command;

    /**
     * @return string
     */
    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * @return string
     */
    public function getCommand(): string
    {
        return $this->command;
    }
}