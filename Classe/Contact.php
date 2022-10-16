<?php

	
namespace Classe;

use Classe\Customer;
use Classe\Host;

class Contact
{
	private string $email;
	private int $phoneNumber;
    private string $role;
    private Customer $customer;
    private Host $host;

	public function getEmail(): string
	{
		return $this->email;
	}

	public function setEmail(string $email): void
	{
		$this->email = $email;
	}

	public function getPhoneNumber(): int
	{
		return $this->phoneNumber;
	}

    public function setPhoneNumber(int $phoneNumber): void
	{
		$this->phoneNumber = $phoneNumber;
	}

    public function getRole(): string
	{
		return $this->role;
	}

    public function setRole(string $role): void
	{
		$this->role = $role;
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