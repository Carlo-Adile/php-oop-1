<?php 

require_once __DIR__ . "/Models/production.php";
require_once __DIR__ . "/Models/genre.php";

class TvSerie extends Production{
  public $totalSeason;

  public function __construct($title, $language, $vote, Genre $genre, TotalSeason $totalSeason,)
  {
    $this->totalSeason = $totalSeason;
    
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