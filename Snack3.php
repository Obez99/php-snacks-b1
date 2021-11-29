<?php

//Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta


$randomNumbers = [];

for ($i = 0; $i < 15; $i++) {
  $randomNumber = rand(1, 100);
  if (in_array($randomNumber, $randomNumbers)) {
    $i--;
  } else {
    array_push($randomNumbers, $randomNumber);
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack3</title>
</head>

<body>
  <ul>
    <?php
    for ($i = 0; $i < count($randomNumbers); $i++) {
      echo "<li>" . $randomNumbers[$i] . "</li>";
    }
    ?>
  </ul>
</body>

</html>