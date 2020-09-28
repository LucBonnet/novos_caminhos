<?php
declare(strict_types=1);
require __DIR__ . '/../framework/config.php';
require_once __DIR__ . '/../vendor/autoload.php';
PHPClassName('2.17 - Relacionamento entre Objetos');
 

PHPClassSession('Composição', __LINE__);

$company = new classes\Company();

$company->addTeamMember("Docente", "Iury", "Oliveira");
$company->addTeamMember("Tutor1", "Fernando", "Arantes");
$company->addTeamMember("Tutor2", "Daniel", "Canoli");
$company->addTeamMember("Tutor3", "Luciano", "Ribeiro");
$company->addTeamMember("Supervisor", "José", "Roberto");

var_dump($company);

/**
 * @var classes\User $member
 */
foreach ($company->getTeam() as $member){
  echo "<p>{$member->getJob()}: {$member->getFirstName()} {$member->getLastName()}</p>";
}