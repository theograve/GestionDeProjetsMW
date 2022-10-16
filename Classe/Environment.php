<?php

namespace Classe;

use Classe\project;

class Environment
{
    private string $name;
    private string $link;
    private string $ipAddress;
    private string $sshPort;
    private string $sshName;
    private string $phpmyadminLink;
    private string $ipRestriction;
    private Project $project;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function setLink(string $link): void
    {
        $this->link = $link;
    }

    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(string $ipAddress): void
    {
        $this->ipAddress = $ipAddress;
    }

    public function getSshPort(): string
    {
        return $this->sshPort;
    }

    public function setSshPort(string $sshPort): void
    {
        $this->sshPort = $sshPort;
    }

    public function getSshName(): string
    {
        return $this->sshPName;
    }

    public function setSshName(string $sshName): void
    {
        $this->sshName = $sshName;
    }

    public function getPhpmyadminLink(): string
    {
        return $this->phpmyadminLink;
    }

    public function setPhpmyadminLink(string $phpmyadminLink): void
    {
        $this->phpmyadminLink = $phpmyadminLink;
    }

    public function getIpRestriction(): string
    {
        return $this->phpmyadminLink;
    }

    public function setIpRestriction(string $ipRestriction): void
    {
        $this->ipRestriction = $ipRestriction;
    }

    public function getProject(): Project
    {
        return $this->project;
    }

    public function setProject(Project $project): void
    {
        $this->project = $project;
    }
}