<?php

//Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta


$randomNumbers = [];

for ($i = 0; $i < 15; $i++) {
  array_push($randomNumbers, rand(1, 100));
}

var_dump($randomNumbers);
