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
  $letters2 = str_split($s2);

  $num = 0;

  foreach ($letters1 as $letter1) {
    foreach ($letters2 as $letter2) {
      if ($letter1 == $letter2) {
        $num++;
        $index = (int) array_search($letter2, $letters2);
        unset($letters2[$index]);

        break;
      }
    }
  }

  echo $num;
}

commonCharacterCount("aabcc", "adcaa");