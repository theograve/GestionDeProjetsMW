<?php

require 'include/navbar.php';
require 'autoloader.php';
require_once __DIR__.'/Classe/CodeNameAndNotes.php';

use Classe\Contact;
use Classe\Customer;
use Classe\Environment;
use Classe\Host;
use Classe\Project;


$customer = new Customer();
$customer->setCode('45678');
$customer->setname('Frédéric customer');
$customer->setnotes('un texte exemple customer');

$host = new Host();
$host->setCode('45678000000');
$host->setname('Frédéric host');
$host->setnotes('un texte exemple host');

$contact = new Contact();
$contact->setEmail('test@un.deux');
$contact->setPhoneNumber('0102030405');
$contact->setRole('un role');
$contact->setCustomer($customer);
$contact->setHost($host);

$project = new Project();
$project->setCode(1323);
$project->setName('testNomProjet');
$project->setLastPass('testLastPass');
$project->setLinkMockUps('testLinkMockUps');
$project->setManagedServer('testManagedServer');
$project->setNotes('testNotes');
$project->setCustomer($customer);
$project->setHost($host);

$environment = new Environment();
$environment->setLink('testLink');
$environment->setName('testNomProjet');
$environment->setIpAddress('testIpAddress');
$environment->setSshPort('testSshPort');
$environment->setSshName('testSshName');
$environment->setPhpmyadminLink('testPhpMyadmin');
$environment->setIpRestriction('testIpRestriction');
$environment->setProject($project);

var_dump($customer->getname());
var_dump($host->getname());
var_dump($contact->getEmail());
var_dump($contact->getRole());