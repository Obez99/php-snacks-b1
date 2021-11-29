<?php

//Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta


$randomNumbers = [];


$isFound = false;

for ($i = 0; $i < 15; $i++) {
  $randomNumber = rand(1, 100);
  if (in_array($randomNumber, $randomNumbers)) {
    $i--;
  } else {
    array_push($randomNumbers, $randomNumber);
  }
}


var_dump($randomNumbers);
