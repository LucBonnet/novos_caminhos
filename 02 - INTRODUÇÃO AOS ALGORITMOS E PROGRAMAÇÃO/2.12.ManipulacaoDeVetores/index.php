<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('CLASS_TITLE');
 
/*
*
*/
PHPClassSession('Manipulação', __LINE__);

$index = [
  "Front End Developer",
  "Back End Developer",
  "Full Stack Developer",
];

$assoc = [
  "dev1" => "Front End Developer",
  "dev2" => "Back End Developer",
  "dev3" => "Full Stack Developer",
];


array_unshift($index, "", "FULL CYCLE DEVELOPER");
$assoc = ["dev4" => "FULL CYCLE DEVELOPER"] + $assoc;

array_push($index, "DEVOPS");
$assoc = $assoc + ["dev5" => "DEVOPS"];

array_shift($index);
array_shift($assoc);

array_pop($index);
array_pop($assoc);

var_dump($index, $assoc);

PHPClassSession('Ordenação', __LINE__);

$index = array_reverse($index);
$assoc = array_reverse($assoc);

//item
asort($index);
asort($assoc);

//index
ksort($index);
ksort($assoc);

//ordenação considerando o valor e desconsiderando a key
sort($index);
// sort($assoc);

var_dump($index, $assoc);

PHPClassSession('Verificação', __LINE__);

var_dump(
  [
    array_keys($assoc),
    array_values($assoc),
  ]
);

if (in_array("Front End Developer", $assoc)) {
  echo "<p>Existe</p>";
}

$arrToString = implode(", ", $assoc);
$stringToArr = explode(", ", $arrToString);

var_dump($arrToString);
var_dump($stringToArr);

PHPClassSession('Exemplo Prático', __LINE__);

$profile = [
  "name" => "Iury",
  "company" => "IFTO",
  "email" => "iury.oliveira@ifto.edu.br",
];

$template = <<<TPL
<article>
  <h1>{{name}}</h1>
  <p>{{company}}</br>
    <a href="mailto:{{email}}">Enviar Email</a>
  </p>
</article>
TPL;

echo $template;

echo str_replace(array_keys($profile), array_values($profile), $template);

$replaces = "{{".implode("}}&{{", array_keys($profile)) . "}}";

var_dump(explode("&", $replaces));

echo str_replace(explode("&", $replaces), array_values($profile), $template);