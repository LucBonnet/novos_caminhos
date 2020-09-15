<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Aula 2.8 - Closures e Generators');
 



PHPClassSession('Closures', __LINE__);

$myAge = function ($year){
  $age = date("Y") - $year;
  return "<h5>Você tem $age anos</h5>";
};

echo $myAge(2001);

$priceBRL = function ($price){
  return number_format($price, 2, ",", ".");
};

echo "<p>Os futuros projetos custarão R$ {$priceBRL(3600)}</p>";

$myCart = [];
$myCart['totalPrice'] = 0;

$cartAdd = function ($item, $qtd, $price) use (&$myCart){
  $myCart[$item] = $qtd * $price;
  $myCart["totalPrice"] += $myCart[$item];
};

$cartAdd("Infra Estrutura de Desenvolvimento", 1, 900);
$cartAdd("Algoritmos e Programação", 3, 600);

var_dump($myCart);


PHPClassSession('Generators', __LINE__);

$interator = 40000;

// function showDates($days){
//   $saveDate = [];
//   for ($day = 1; $day < $days; $day++) {
//     $saveDate[] = date("d/m/Y", strtotime("+{$day}days"));
//   }

//   return $saveDate;
// }

// echo "<div>";
// foreach (showDates($interator) as $date) {
//   echo "<small class='tag'>{$date}</small>";
// }
// echo "</div>";




function generatorDates($days){
  for ($day = 1; $day < $days; $day++) {
    yield date("d/m/Y", strtotime("+{$day}days"));
  }
}

echo "<div style='text-align: center'>";
foreach (generatorDates($interator) as $date) {
  echo "<small class='tag'>{$date}</small>" . PHP_EOL;
}
echo "</div>";