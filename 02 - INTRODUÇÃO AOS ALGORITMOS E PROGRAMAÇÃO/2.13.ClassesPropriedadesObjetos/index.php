<?php
declare(strict_types=1);
require __DIR__ . '/../framework/config.php';
PHPClassName('Aula 2.13 - Classes, Propriedades e Objetos');
 



PHPClassSession('Classes e Objetos', __LINE__);

require_once __DIR__ . "/classes/User.php";

$user1 = new User();
$user2 = new User();
$user3 = new User();
var_dump($user1, $user2, $user3);

PHPClassSession('Propriedades', __LINE__);

$user1->setFirstName("Iury");
//$user1->setFirstName(10); -> erro
$user1->setLastName("Oliveira");
$user1->setEmail("iury");

var_dump($user1, $user1->getFirstName());

PHPClassSession('Métodos', __LINE__);

if(!$user1->setEmail("iury.olive")){
  echo "<p class='trigger error'>O email {$user1->getEmail()} não é válido !</p>";
}

var_dump($user1);