<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Aula 2.9 - Requisição de Arquivoss');
 



PHPClassSession('include, include_once', __LINE__);

var_dump(__DIR__);

// include "header.php";

include __DIR__ . "/" . "header.php";

// include "file.php";
// echo "<p>Continue</p>";

$profile = new stdClass();
$profile->name = "Iury";
$profile->company = "IFTO";
$profile->email = "iury.oliveira@ifto.edu.br";

var_dump($profile);

PHPClassSession('require, require_once', __LINE__);

require "file.php";
echo "<p>Continue</p>";