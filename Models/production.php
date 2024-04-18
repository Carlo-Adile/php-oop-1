<?php

class Production
{
  public $title;
  public $language;
  public $vote;

  public function __construct($title, $language, $vote, Genre $genre)
  {
    $this->title = $title;
    $this->language = $language;
    $this->vote = $vote;
    /* genre */
    $this->genre = $genre;
  }
  
}