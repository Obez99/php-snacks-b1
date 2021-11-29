<?php

//Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
//che name sia più lungo di 3 caratteri,
//che mail contenga un punto e una chiocciola,
//che age sia un numero.
//Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

if (count($_GET) < 3)
  exit("Inserisci i valori 'name', 'email, 'age'");


$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];

if (strlen($name) > 3 && strpos($email, "@") && strpos($email, ".") && intval($age))
  echo ("Accesso riuscito");
else
  echo ("Accesso negato");
