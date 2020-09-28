<?php
declare(strict_types=1);

require __DIR__ . '/../framework/config.php';
PHPClassName('Aula 2.15 - Carregamento Automático de Classes');
 

PHPClassSession('Autoload Com Composer', __LINE__);

require_once __DIR__ . "/../vendor/autoload.php";

$user = new classes\User();
$address = new classes\Address();
$company = new classes\Company();

var_dump($user, $address, $company);