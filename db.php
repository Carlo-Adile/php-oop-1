<?php 

require_once __DIR__ . "/Models/production.php";
require_once __DIR__ . "/Models/genre.php";
require_once __DIR__ . "./Models/tvSerie.php";

$productions = array(
  new Production ('Il castello errante di Howl', 'Italiano', 10, new Genre ('fantasy')),
  new Production ('Alien', 'Italiano', 9, new Genre ('horror sci-fi')),
  new Production ('Vampire Hunder D Bloodlust', 'Giapponese', 8, new Genre ('horror')),
);

/* aggiungiamo Movie e TvSerie */
$productions[] = new TvSerie('Breaking Bad', 'English', 9.5, new Genre ('thriller'), 5);

function getGenreBadge($genre){
  /* passiamo il parametro production > genre > name da usare come genreName e associare il relativo colore badge */
  $genreName = array(
    'fantasy' => 'text-bg-primary',
    'horror' => 'text-bg-danger',
    'horror sci-fi' => 'text-bg-danger',
  );
  /* copre risultati non previsti */
  return $genreName[$genre] ?? 'text-bg-primary';
};

