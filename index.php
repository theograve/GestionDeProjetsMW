<?php

require_once __DIR__.'/Contact.php';
require_once __DIR__.'/Customer.php';
require_once __DIR__.'/Environment.php';
require_once __DIR__.'/Host.php';
require_once __DIR__.'/Project.php';


$customer = new Customer();
$customer->setCodeCustomer('45678');
$customer->setnameCustomer('Frédéric customer');
$customer->setnotesCustomer('un texte exemple customer');

$host = new Host();
$host->setCodeHost('45678000000');
$host->setnameHost('Frédéric host');
$host->setnotesHost('un texte exemple host');

$contact = new Contact();
$contact->setEmail('test@un.deux');
$contact->setPhoneNumber('0102030405');
$contact->setRole('un role');
$contact->setCustomer($customer);
$contact->setHost($host);

var_dump($customer->getnameCustomer());
var_dump($host->getnameHost());
var_dump($contact->getEmail());
var_dump($contact->getRole());