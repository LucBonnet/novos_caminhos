<?php

// Questão 6
// Dada uma matriz de strings, 
// retorna outra matriz contendo
// todas as suas strings mais longas.

//Exemplo

// Se inputArray = ["aba", "aa", "ad", "vcd", "aba"], 
// o valor de retorno ["aba", "vcd", "aba"].

function allLongestStrings($inputArray)
{
  $newArray = [];
  $longestWordLength = 0;
  foreach ($inputArray as $string) {
    if (strlen($string) > $longestWordLength) {
      $longestWordLength = strlen($string);
    }
  }
  foreach ($inputArray as $string) {
    if (strlen($string) == $longestWordLength) {
      $newArray[] = $string;
    }
  }
  var_dump($newArray);
}

allLongestStrings(["aaaa", "aa", "ad", "vcd", "aba"]);