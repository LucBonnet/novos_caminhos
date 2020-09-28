<?php 

function functionName($arg1, $arg2, $arg3) {
  $body = [$arg1, $arg2, $arg3];
  return $body;
}

// function calcIMC ($weight, $height){
//   return number_format($weight / ($height * $height), 2);
// }

function calcIMC_Global (){
  global $weight;
  global $height;
  
  return (float) number_format($weight / ($height * $height), 2);
}

function payTotal($price) {
  static $total;
  $total += $price;
  return "<p> O total a pagar é R$ " . number_format($total, '2', ',', '.') . "</p>";
}

function myTeam() {  
  $teamName = func_get_args();
  $teamCount = func_num_args();

  return ['members' => $teamName, 'count' => $teamCount];
};

function soma(){
  $args = func_get_args();
  $resul = 0;
  foreach($args as $num){
    $resul += $num;
  }
  return $resul;
}