<?php

// Questão 9

// Algumas pessoas estão em uma fila no parque.
// As pessoas e as arvores no parque serão representadas
// por um vetor.

// O valor -1 representa uma árvore
// valor positivo representa a altura de uma pessoa

// Existem árvores entre as pessoas e as árvores 
// não não podem ser movidas.

// Sua tarefa é reorganizar as pessoas por suas alturas
// em uma ordem não decrescente, sem mover as árvores.

// Considere que as pessoas podem ser muito altas!

//Exemplo

//Se $a = [-1, 150, 190, 170, -1, -1, 160, 180], 
// o retorno deve ser [-1, 150, 160, 170, -1, -1, 180, 190].

function sortByHeight($a)
{
  $keys = array_keys(array_filter($a, function ($v) {
    if ($v == -1)
      return 1;
  }));
  $values = array_values(array_filter($a, function ($v) {
    if ($v != -1)
      return 1;
  }));
  sort($values);

  $sortedArray = [];
  $c = 0;
  for ($i = 0; $i < count($a); $i++) {
    if (in_array($i, $keys)) {
      $sortedArray[] = -1;
      $c++;
    } else {
      $sortedArray[] = $values[$i - $c];
    }
  }
  var_dump($sortedArray);
}

sortByHeight([-1, 150, -1, 190, 170, -1, -1, 180, 160]);