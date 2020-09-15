<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('AAula 2.3 - Variáveis e tipos de dados');
 
/*
*
*/
PHPClassSession('VARIÁVEIS', __LINE__);

$firstName = 'Luc';
$lastName = 'Bonnet';

echo "<h3> $firstName $lastName </h3>";

$userEmail = "<p> lucbonnet10@gmail.com </p>";
echo $userEmail;

PHPClassSession('BOOLEAN', __LINE__);

$true = true;
$false = false;

var_dump($true, $false);

$userAge = 70;
$bestAge = ($userAge > 50);
var_dump($bestAge);

$a = 0;
$b = 0.0;
$c = "";
$d = [];
$e = null;

// var_dump($a, $b, $c, $d, $e);

if($a || $b || $c || $d || $e){
  var_dump(true);
}else{
  var_dump(false);
}

PHPClassSession('CALLBACKS', __LINE__);

$code = "<article><h1>CallBack</h1></article>";

$codeClear = call_user_func("strip_tags", $code);
var_dump($code, $codeClear);

PHPClassSession('OUTROS TIPOS', __LINE__);

$string = "Olá Mundo";
$array = [1, $string];
$null = null;
$int = 123;
$float = 1.4;

var_dump($string, $array, $null, $int, $float);