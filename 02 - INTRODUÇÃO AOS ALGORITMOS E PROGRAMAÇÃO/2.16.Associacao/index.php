<?php
declare(strict_types=1);

require __DIR__ . '/../framework/config.php';
require_once __DIR__ . '/../vendor/autoload.php';
PHPClassName('Aula 2.16 - Relacionamento entre Objetos');
 

PHPClassSession('Associação', __LINE__);

$company = new classes\Company();
$company->bootCompany("IFTO", "Tocantins");

var_dump($company);

$address = new classes\Address("Av. Paraguaia", 339, "Próximo a Universidade Federal do Tocantins");

$company->boot("IFTO", $address);

var_dump($company);