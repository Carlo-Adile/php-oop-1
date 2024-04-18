<?php 

require_once __DIR__ . "/Models/production.php";
require_once __DIR__ . "/Models/genre.php";

$productions = array(
  new Production ('Il castello errante di Howl', 'Italiano', 10, new Genre ('fantasy')),
  new Production ('Alien', 'Italiano', 9, new Genre ('horror sci-fi')),
  new Production ('Vampire Hunder D Bloodlust', 'Giapponese', 8, new Genre ('horror')),
);

function getGenreBadge($genre){
  /* passeremo il parametro production>genre>name da usare come genreName e associare il relativo colore */
  $genreName = array(
    'fantasy' => 'text-bg-primary',
    'horror' => 'text-bg-danger',
    'horror sci-fi' => 'text-bg-danger',
  );
  /* copre risultati non previsti */
  return $genreName[$genre] ?? 'text-bg-primary';
};

/* foreach ($productions as $production) {
  echo $production->title;
  echo $production->language;
  echo $production->vote;
} */