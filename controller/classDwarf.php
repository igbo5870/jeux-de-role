<?php

/**
 * create dwarf character
 */
class Dwarf extends Character
{
    public function __construct($name){
        parent::__construct($name, 450,'Ombre noir', 100, 150, 'Nain');
    }  
}