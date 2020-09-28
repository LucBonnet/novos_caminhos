<?php

// Questão 2
// Considere a function incompleta abaixo e escreva um código que
// resolva o seguinte problema

//Dada uma váriavel $inputString, verifique se é um palíndromo .

//Exemplo

//Para inputString = "aabaa", o valor de retorno deve ser true;

//Para inputString = "abac", o valor de retorno deve ser false;

//Resultado booleano
// true se inputString é um palíndromo,
// false se caso contrário.

function checkPalindrome($inputString)
{
  $letters = str_split($inputString);
  $reversedString = implode(array_reverse($letters));

  if($inputString == $reversedString){
    return true;
  }else{
    return false;
  }
}

var_dump(checkPalindrome("zzzazzazz"));
//false