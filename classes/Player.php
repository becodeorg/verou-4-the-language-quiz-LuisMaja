<?php

class Player
{
    // TODO: add name and score
    private $player;
    private $score;

    public function __construct()
    {
        // TODO: add 👤 automatically to their name
        $this->name = 'Player';
        $this->name .= '👤';
        $this->score ='0';

    }
}