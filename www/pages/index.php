<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Aula 02 - Comandos de Saída');

PHPClassSession('echo', __LINE__, "blue");

echo "<p>Olá Mundo!</p>";
echo 20 . PHP_EOL;

echo "Olá";

$hello = "Olá Mundo!!!";
echo "<p> $hello </p>";
echo "<p> {$hello} </p>";

PHPClassSession('print_r', __LINE__);

$array = [
  "nome" => "Luc",
  "idade" => 18,
];

echo "<pre>";
print_r($array);
echo "</pre>";

PHPClassSession('var_dump', __LINE__);

$nome = "Luc";
var_dump($array, $hello);