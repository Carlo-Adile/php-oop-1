<?php 

class Movie extends Production{
  protected $profit;
  protected $length;

  public function __construct($title, $language, $vote, Genre $genre, $profit, $length)
  {
    parent::__construct($title, $language, $vote, $genre);
    $this->profit = $profit;
    $this->length = $length;
  }
  /* getter */
  public function getProfit(){
    return $this->profit;
  }
  public function getLength(){
    return $this->length;
  }
}