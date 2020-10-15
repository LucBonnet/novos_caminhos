<?php

// Questão 5
// Dada uma sequência de inteiros como um array,
// determine se é possível obter uma sequência
// estritamente crescente removendo não mais do que um elemento do array.

//Exemplo

// Se $sequence = [1, 3, 2, 1], a saída deve ser false
// Não há nenhum elemento neste array que possa ser
// removido para obter uma sequência estritamente crescente.

// Se $sequence = [1, 3, 2], a saída deve ser true.
// Você pode remover 3 do vetor para obter a sequência
// estritamente crescente [1, 2]. 
// Como alternativa, você pode remover 2 para obter a
// sequência estritamente crescente [1, 3].

function almostIncreasingSequence($sequence)
{
  $crescente = false;
  for ($i = 0; $i < count($sequence); $i++) {
    $array = $sequence;
    unset($array[$i]);

    $sortedArray = $array;
    sort($sortedArray);
    var_dump($sortedArray);

    if (array_values($array) == array_values($sortedArray)) {
      echo "crescente";
      $crescente = true;
    }
  }
  var_dump($crescente);
}

almostIncreasingSequence([3, 5, 67, 98, 3]);
//true