<?php 

class Charmeleon extends Pokemon {  
    
    public $species = "Charmeleon";

    public function __construct($name, $energyType, $hitpoints, $currentHealth, $moves, $weakness, $resistance) {

        parent:: __construct($this->$name, $species, $energyType, $hitpoints, $currentHealth, $moves, $weakness, $resistance);
    }
    
}