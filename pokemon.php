<?php 

require Pikachu.php;
require Charmeleon.php;

class Pokemon {
    public $name;
    public $energyType;
    public $hitpoints;
    public $currentHealth;
    public $moves;
    public $weakness;
    public $resistance;

    public function __construct($name, $energyType, $hitpoints, $currentHealth, $moves, $weakness, $resistance)
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints;
        $this->currenthealth = $currentHealth;
        $this->moves = $moves;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
    }
}