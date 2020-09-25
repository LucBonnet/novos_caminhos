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

function reverseInParentheses($inputString)
{
  $isInP = false;
  $inP = [];
  $p = [];
  foreach(str_split($inputString) as $character){
    if($isInP && $character != ")"){
      $inP[] = $character;
    } 

    if($character == "("){
      $isInP = true;
    }else if($character == ")"){
      $isInP = false;
      
      $p[] = array_reverse($inP);
      $inP = [];
    }
  }
  
  $isInP = false;
  $resul = [];
  $i = 0;
  foreach(str_split($inputString) as $character){
    if($isInP && $character != ")"){
      
    }else if($character != "(" && $character != ")"){
      $resul[] = $character;
    }

    if($character == "("){
      $isInP = true;
    }else if($character == ")"){
      $isInP = false;
      foreach($p[$i] as $item){
        $resul[] = $item;
      }
      $i++;
    }
  }
  echo implode("", $resul);
}

reverseInParentheses("foo(bar)baz");
//foorabbaz