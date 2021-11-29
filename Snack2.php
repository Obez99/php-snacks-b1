
<?php

//Creare un array di array. 
//Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007
//e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.

$posts = [
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
