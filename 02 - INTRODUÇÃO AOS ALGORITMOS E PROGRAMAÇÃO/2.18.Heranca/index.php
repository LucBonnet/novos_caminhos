<?php
declare(strict_types=1);

require __DIR__ . '/../framework/config.php';
require_once __DIR__ . '/../vendor/autoload.php';
PHPClassName('2.18 - Relacionamento entre Objetos - Herança');
 

PHPClassSession('Classe Pai', __LINE__);

$eventPai = new classes\Event(
  "Live Tira Dúvidas", 
  new DateTime("2020-09-24 20:00"), 
  5000, 
  4
);

var_dump($eventPai);

$eventPai->register("Iury Gomes", "iuri.oliveira@ifto.edu.br");
$eventPai->register("José Roberto", "jose.roberto@ifto.edu.br");
$eventPai->register("Fernando Arantes", "fernando.arantes@ifto.edu.br");
$eventPai->register("Daniel Canoli", "daniel.canoli@ifto.edu.br");
$eventPai->register("Luciano Ribeiro", "luciano.ribeiro@ifto.edu.br");

PHPClassSession('Classe Filha', __LINE__);

$address = new classes\Address("Rua X", 20, "Próximo a UFT");

$eventFilho = new classes\EventLive(
  "Live Tira Dúvidas", 
  new DateTime("2020-09-24 20:00"), 
  5000, 
  4,
  $address
); 

var_dump($eventFilho);

$eventFilho->register("Iury Gomes", "iuri.oliveira@ifto.edu.br");
$eventFilho->register("José Roberto", "jose.roberto@ifto.edu.br");
$eventFilho->register("Fernando Arantes", "fernando.arantes@ifto.edu.br");
$eventFilho->register("Daniel Canoli", "daniel.canoli@ifto.edu.br");
$eventFilho->register("Luciano Ribeiro", "luciano.ribeiro@ifto.edu.br");

PHPClassSession('Polimorfismo', __LINE__);

$eventOnline = new classes\EventOnline(
  "Live Tira Dúvidas", 
  new DateTime("2020-09-24 20:00"), 
  5000, 
  "https://google.classroom"
); 

var_dump($eventOnline);

$eventOnline->register("Iury Gomes", "iuri.oliveira@ifto.edu.br");
$eventOnline->register("José Roberto", "jose.roberto@ifto.edu.br");
$eventOnline->register("Fernando Arantes", "fernando.arantes@ifto.edu.br");
$eventOnline->register("Daniel Canoli", "daniel.canoli@ifto.edu.br");
$eventOnline->register("Luciano Ribeiro", "luciano.ribeiro@ifto.edu.br");