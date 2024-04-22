<?php 

/* require_once __DIR__ . "/Models/production.php"; */
/* require_once __DIR__ . "/Models/genre.php"; */

class TvSerie extends Production{
  protected $totalSeason;

  public function __construct($title, $language, $vote, Genre $genre, $totalSeason)
  {
    parent::__construct($title, $language, $vote, $genre);
    $this->totalSeason = $totalSeason;
    
  }
  /* getter */
  public function getTotalSeason() {
    return $this->totalSeason;
  }
}