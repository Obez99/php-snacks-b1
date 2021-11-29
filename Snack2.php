<?php

//Creare un array di array. 
//Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007
//e come valore un array di post associati a quella data. 
//Stampare ogni data con i relativi post.

$posts_list = [

  "01/11/2021" => [
    [
      "title" => "Post1",
      "author" => "Gabriella Bianchi",
      "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
    ],
    [
      "title" => "Post2",
      "author" => "Berta Castiglione",
      "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
    ],
    [
      "title" => "Post3",
      "author" => "Giovanni De Luca",
      "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
    ],
  ],

  "10/11/2021" => [
    [
      "title" => "Post1",
      "author" => "Giovanni De Luca",
      "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
    ],
    [
      "title" => "Post2",
      "author" => "Berta Castiglione",
      "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
    ],
    [
      "title" => "Post3",
      "author" => "Giovanni De Luca",
      "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
    ],
  ],

  "29/11/2021" => [
    [
      "title" => "Post1",
      "author" => "Gabriella Bianchi",
      "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
    ],
    [
      "title" => "Post2",
      "author" => "Berta Castiglione",
      "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
    ],
    [
      "title" => "Post3",
      "author" => "Berta Castiglione",
      "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
    ],
  ],
];

$posts_date = array_keys($posts_list);

for ($i = 0; $i < count($posts_list); $i++) {
  echo $posts_date[$i] . "<br>";
  $posts = $posts_list[$posts_date[$i]];

  for ($j = 0; $j < count($posts); $j++) {
    echo $posts[$j]["title"] . "<br>";
    echo $posts[$j]["author"] . "<br>";
    echo $posts[$j]["text"] . "<br><br>";
  }
}
