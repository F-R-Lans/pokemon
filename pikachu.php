<?php 

class Pikachu extends Pokemon {

    public $species = "pikachu";

    public function __construct($name, $energyType, $hitpoints, $currentHealth, $moves, $weakness, $resistance) {

        parent:: __construct($this->$name, $species, $energyType, $hitpoints, $currentHealth, $moves, $weakness, $resistance);
    }
}