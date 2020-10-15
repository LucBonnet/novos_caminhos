<?php

// Questão 10

// Escreva uma função que inverta os caracteres
// entre parênteses (possivelmente aninhados)
// na string de entrada.

// As strings de entrada sempre serão bem
// formadas com ()s correspondentes .

// Exemplo

// Para inputString = "(bar)", a saída deve ser "rab"
// Para inputString = "foo(bar)baz", a saída deve ser "foorabbaz"

// Para inputString = "foo(bar)baz(blim)",
// a saída deve ser "foorabbazmilb"

function reverreverseInParentheses($inputString)
{
  $resul = [];
  $isInP = false;
  $numPA = 0;
  $numPF = 0;

  $p[] = $inputString;
  
  $i = 0;
  do{
    foreach(str_split($p[$i]) as $character){
      //Verifica se o character está dentro do maior parênteses ou não;
      if($character == "("){
        $numPA++;
        $isInP = true;
      }else if($character == ")"){
        $numPF++;
        if($numPF == $numPA){
          $isInP = false;
        }
      }
      
      //Se estiver dentro do maior parênteses adiciona ao array resul;
      if($isInP){
        $resul[] = $character;
        var_dump($resul);
      }
    }
    array_shift($resul);
    var_dump($resul);
    
    $p[] = implode("", $resul);
    $resul = [];
    $i++;
  }while(in_array("(", str_split($p[$i])));
  
  $isInP = false;
  $numPA = 0;
  $numPF = 0;
  $numPAV = 0;
  $numPFV = 0;
  $indexPF = 0;
  
  var_dump($p);
  $p = array_reverse($p);  
  $newP = $p;
  $c = 0;
  do{
    $isInP = false;
    $p[$c] = implode("", array_reverse(str_split($p[$c])));
    $newP[$c] = $p[$c];

    for($j=0; $j < count(str_split($p[$c+1])); $j++){
      if(str_split($p[$c+1])[$j] == "("){
        $numPAV++;
      }else if(str_split($p[$c+1])[$j] == ")"){
        $numPFV++;
      }
      if($numPAV == $numPFV){
        $indexPF = $j;
      }
    }
    $newP[$c+1] = "";
    foreach(str_split($p[$c+1]) as $value){
      if($value == "("){
        $numPA++;
        $isInP = true;
      }else if($value == ")"){
        $numPF++;
        if($numPF == $numPA){
          $isInP = false;
        }
      }
      if($isInP){
        $newP[$c+1] .= $p[$c];

        for($j = $indexPF; $j < (count(str_split($p[$c+1]))); $j++){
          if(str_split($p[$c+1])[$j] != "(" && str_split($p[$c+1])[$j] != ")")
            $newP[$c+1] .= str_split($p[$c+1])[$j];
        }
        break;
      }else{
        if($value != "(" && $value != ")")
          $newP[$c+1] .= $value; 
      }
    }
    $p[$c+1] = $newP[$c+1];
    
    $c++;
    $numPA = 0;
    $numPF = 0;
    $numPAV = 0;
    $numPFV = 0;
  }while($c < count($p)-1);

  return $p[count($p)-1];
}

var_dump(reverreverseInParentheses("foo(bar(baz))blim"));