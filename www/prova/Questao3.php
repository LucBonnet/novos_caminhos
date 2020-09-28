<?php

// Questão 3
// Dado um vetor de inteiros, encontre o par de elementos
// adjacentes que possui o maior produto
// e depois retorne o valor desse produto.

//Exemplo

//Pois inputArray = [3, 6, -2, -5, 7, 3], 
// o valor de retorno deve ser 21.
// pois 7 e 3 produz o maior produto.

// Retorno o maior produto
//O maior produto de elementos adjacentes.


function adjacentElementsProduct($inputArray)
{
  $resul = 0;
  for($i = 0; $i < count($inputArray); $i++){
    if($i != (count($inputArray) - 1)) {
      if($inputArray[$i] * $inputArray[($i + 1)] > $resul){
        $resul = $inputArray[$i] * $inputArray[($i + 1)];
      }
    }
  }
  echo "<p>{$resul}</p>";
}

adjacentElementsProduct([5, 6, -4, 2, 3, 2, -23]);