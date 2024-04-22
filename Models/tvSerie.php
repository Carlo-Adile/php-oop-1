<?php 

require_once __DIR__ . "/Models/production.php";
require_once __DIR__ . "/Models/genre.php";

class TvSerie extends Production{
  public $genre;
  public $totalSeason;

  public function __construct($title, $language, $vote, $totalSeason, Genre $genre)
  {
    $this->totalSeason = $totalSeason;
    $this->genre = $genre;
    parent::__construct($title, $language, $vote, $genre);
  }
  /* getter */
  public function getGenre() {
    return $this->genre->name;
  }

  public function getTotalSeason() {
    return $this->totalSeason;
  }
}