<?php

require_once 'Host.php';
require_once 'Customer.php';

class Project
{
    private int $code;
    private string $name;
    private string $lastPass;
    private string $linkMockUps;
    private string $managedServer;
    private string $notes;
    private Customer $customer;
    private Host $host;

    public function getCode(): int
    {
        return $this->code;
    }

    public function setCode(int $code): void
    {
        $this->code = $code;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getLastPass(): string
    {
        return $this->lastPass;
    }

    public function setLastPass(string $lastPass): void
    {
        $this->lastPass = $lastPass;
    }

    public function getLinkMockUps(): string
    {
        return $this->linkMockUps;
    }

    public function setLinkMockUps(string $linkMockUps): void
    {
        $this->linkMockUps = $linkMockUps;
    }

    public function getManagedServer(): string
    {
        return $this->managedServer;
    }

    public function setManagedServer(string $managedServer): void
    {
        $this->managedServer = $managedServer;
    }

    public function getNotes(): string
    {
        return $this->notes;
    }

    public function setNotes(string $notes): void
    {
        $this->notes = $notes;
    }

    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    public function setCustomer(Customer $customer): void
    {
        $this->customer = $customer;
    }

    public function getHost(): Host
    {
        return $this->host;
    }

    public function setHost(Host $host): void
    {
        $this->host = $host;
    }
}