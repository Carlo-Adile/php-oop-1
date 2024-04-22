<?php

class Production
{
  public $title;
  public $language;
  public $vote;
  public $genre;

  public function __construct($title, $language, $vote, Genre $genre)
  {
    $this->title = $title;
    $this->language = $language;
    $this->vote = $vote;
    /* genre */
    $this->genre = $genre;
  }
  //getters
  public function getTitle(){
    return $this->title;
  }
  public function getLanguage(){
    return $this->language;
  }
  public function getVote(){
    return $this->vote;
  }
  public function getGenre(){
    return $this->genre;
  }
  //setters
  public function setTitle($title){
    $this->title = $title;
  }
  public function setLanguage($language){
    $this->language = $language;
  }
  public function setVote($vote){
    $this->vote = $vote;
  }
  public function setGenre(Genre $genre){
    $this->genre = $genre;
  }
}

