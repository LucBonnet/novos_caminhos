<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Aula 2.6 - Estruturas de COntrole');




PHPClassSession('IF, ELSEIF, ELSE', __LINE__);

$teste = 0;

if($teste){
  var_dump(true);
}else{
  var_dump(false);
}

$age = 20;

if($age <= 20){
  var_dump("IFTO");
}elseif($age > 20 && $age < 50){
  var_dump("Programador WEB");
}else{
  var_dump("Novos Caminhos");
}

PHPClassSession('ISSET, EMPTY, !', __LINE__);

$time;

if (isset($time)){
  var_dump("Teste1");
}else{
  var_dump("Teste2");
}

$teste = "";

if(!empty($teste)){
  var_dump("Programador Web");
}else{
  var_dump("Novos Caminhos");
}

PHPClassSession('SWITCH', __LINE__);

$payment = "credit_card";

switch ($payment) {
  case "billet_printed":
    var_dump("Boleto Impresso");
    break;
  case "canceled":
    var_dump("Pagamento Cancelado");
    break;
  case "credit_card":
    var_dump("Cartão de Crédito");
    break;
  default:
    var_dump("Erro ao processar pagamento");
    break;
}