<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Aula 2.10 - Functions');

require __DIR__ . "/functions.php";

PHPClassSession('Functions', __LINE__);

var_dump(functionName("IFTO", "Novos Caminhos", "Programador Web"));
var_dump(functionName("", "", ""));

// var_dump(calcIMC(70, 1.70));

PHPClassSession('Global Access', __LINE__);

$weight = 91;
$height = 1.90;

var_dump(calcIMC_Global());

PHPClassSession('Static Arguments', __LINE__);

$pay = payTotal(200);
$pay = payTotal(150);
$pay = payTotal(500);

var_dump($pay);

PHPClassSession('Dinamic Arguments', __LINE__);

var_dump(myTeam());

var_dump(soma());