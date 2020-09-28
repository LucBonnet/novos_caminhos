<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Aula 2.7 - Estruturas de Repetição');
 



PHPClassSession('while, do while', __LINE__);

$looping = 1;
$while = [];

while ($looping <= 10) {
  $while[] = $looping;
  $looping++;
}

var_dump($while);

$looping = 10;

do {
  $while[] = $looping;
  $looping--;
}while($looping >= 1);

var_dump($while);

PHPClassSession('for', __LINE__);

for ($i = 0; $i < 10; $i++) {
  echo "<p>$i</p>";
}

PHPClassSession('break, continue', __LINE__);

for ($i = 0; $i < 10; $i++) {
  if($i % 2){
    continue;
  }

  if($i >= 10){
    break;
  }

  echo "<p>$i</p>";
}

PHPClassSession('foreach', __LINE__);

$array = [];

for ($i = 0; $i < 10; $i++) {
  $array[] = $i . "a";
}

foreach ($array as $key => $value) {
  echo "<p>$key = $value</p>";
}

var_dump($array);