<?php

// Questão 7
// Dadas duas strings, encontre o
// número de caracteres comuns entre elas.

//Exemplo

//Para $s1 = "aabcc"e $s2 = "adcaa", o retorno deve ser 3.
//As strings têm 3 caracteres comuns 2 "a" e 1"c".

function commonCharacterCount($s1, $s2)
{
  $letters1 = str_split($s1);
  var_dump($letters1);
  $letters2 = str_split($s2);
  var_dump($letters2);

  var_dump(array_diff($letters2, $letters1));
}

commonCharacterCount("aabcc", "adcaa");