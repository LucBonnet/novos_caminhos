<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Aula 2.11 - Constantes Mágicas');
 


PHPClassSession('Constantes', __LINE__);

var_dump(__LINE__);
var_dump(__DIR__);
var_dump(__FILE__);

define("COURSE", "Programador Web");
const AUTHOR = "Governo Federal";

$formation = true;

if ($formation) {
  define("COURSE_TYPE", "Formação");  
  // const TESTE = "teste"; //não pode ser condicional
} else {
  define("COURSE_TYPE", "Curso");   
}

echo "<p>" . COURSE . "</p>";
echo "<p>" . COURSE_TYPE . "</p>";
echo "<p>" . AUTHOR . "</p>";

// var_dump(get_defined_constants(true));
// var_dump(get_defined_constants(true)["user"]);

PHPClassSession('Constantes Mágicas', __LINE__);

var_dump([
  __DIR__,
  __FILE__,
  __LINE__,
  __CLASS__,
]);