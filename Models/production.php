<?php

class Production
{
  public $title;
  public $language;
  public $vote;

  public function __construct($title, $language, $vote)
  {
    $this->title = $title;
    $this->language = $language;
    $this->vote = $vote;
  }
  public function __toString()
  {
    return "Title: " . $this->title . ", Language: " . $this->language . ", Vote: " . $this->vote;
  }
}