<?php

namespace Classe;

use Classe\Customer;
use Classe\Host;

class Project
{
    use CodeNameAndNotesTrait;

    private string $lastPass;
    private string $linkMockUps;
    private string $managedServer;
    private Customer $customer;
    private Host $host;

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