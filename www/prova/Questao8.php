<?php

// Questão 8

// Os números dos ingressos geralmente consistem
// em um número par de dígitos.
// Considere para essa questão que um número
// de bilhete é considerado de sorte
// se a soma da primeira metade dos dígitos
// for igual à soma da segunda metade.

// Dado um número de bilhete n, determine se é sorte ou não.

// Exemplo

// Para $n = 1230, o retorno deve ser  true;
// Para $n = 239017, o retorno deve ser false;

function isLucky($n)
{
  $numbers = str_split($n);

  $firstHalf = [];
  $lastHalf = [];

  for ($i = 0; $i < count($numbers); $i++) {
    if ($i < (count($numbers) / 2)) {
      $firstHalf[] = $numbers[$i];
    } else {
      $lastHalf[] = $numbers[$i];
    }
  }

  if (array_sum($firstHalf) == array_sum($lastHalf)) {
    echo "true";
  } else {
    echo "false";
  }
}

isLucky(1230);