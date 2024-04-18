<?php 

require_once __DIR__ . "/Models/production.php";

/* $howlCastle = new Production ('Il castello errante di Howl', 'italiano', 10); */

$productions = array(
  new Production ('Il castello errante di Howl', 'Italiano', 10),
  new Production ('Alien', 'Italiano', 9),
  new Production ('Vampire Hunder D Bloodlust', 'Giapponese', 8),
);

/* foreach ($productions as $production) {
  echo $production->title;
  echo $production->language;
  echo $production->vote;
} */