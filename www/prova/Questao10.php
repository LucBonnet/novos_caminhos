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

// function reverseInParentheses($inputString)
// {
//   $numPA = 0;
//   $numPF = 0;
//   $isInP = false;
//   $inP = [];
//   $p = [];
//   foreach(str_split($inputString) as $character){
//     if($isInP){
//       $inP[] = $character;
//     } 

//     if($character == "("){
//       $numPA++;
//       $isInP = true;
//     }else if($character == ")"){
//       $numPF++;
//       if($numPA == $numPF){
//         $isInP = false;
      
//         array_pop($inP);
        
//         $p[] = array_reverse($inP);

//         var_dump($p);

//         $inP = [];
//       }
//     }
//   }
  
//   $isInP = false;
//   $resul = [];
//   $i = 0;
//   foreach(str_split($inputString) as $character){
//     if($isInP){
//       $inP[] = $character;
//     }

//     if($character == "("){
//       $numPA++;
//       $isInP = true;
//     }else if($character == ")"){
//       $numPF++;
//       if($numPA == $numPF){
//         $isInP = false;
      
//         array_pop($inP);
//         foreach($p[$i] as $item){
//           var_dump($item);
//           $resul[] = $item;
//         }
//         $i++;
//       }
//     }
//     if(in_array("(", $resul)){
//       reverseInParentheses(implode("", $resul));
//     }
//   }
//   return $resul;
// }


function reverseInParentheses($str){
  $isInP = false;
  $numPA = 0;
  $numPF = 0;
  
  $p = [];
  $resul = [];
  
  foreach(str_split($str) as $character){
    if($character == "("){
      $numPA++;
      $isInP = true;
    }else if($character == ")"){
      $numPF++;
      if($numPA == $numPF){
        $isInP = false;
      }
    }
    
    if($isInP){
      $p[] = $character;
    }   
  }

  // $p = array_reverse($p);
  array_shift($p);

  var_dump($p);

  if(in_array("(", $p)){
    $p = reverseInParentheses(implode("", $p));
  }

  $isInP = 0;
  $numPA = 0;
  $numPF = 0;

  foreach(str_split($str) as $character){
    if($character == "("){
      $numPA++;
      $isInP = 1;
      foreach($p as $item){
        $resul[] = $item;
      }
    }else if($character == ")"){
      $numPF++;
      if($numPA == $numPF){
        $isInP = -1;
      }
    }
    
    if(!$isInP){
      var_dump($character);
      $resul[] = $character;
    }

    if($isInP == -1){
      $isInP = 0;
    }
  }
  return $resul;
}


var_dump(reverseInParentheses("e(a(bc)d)"));