<?php


abstract class AbstractTournament
{
    private $golfers;
    private $numOfPlayers;
    private $type;

    function __construct($golfers, $numOfPlayers,  $type) {
      $this->golfers   = $golfers;
      $this->numOfPlayers   = $numOfPlayers;
      $this->type   = $type;
    }
}