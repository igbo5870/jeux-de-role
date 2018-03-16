<?php

/**
 * Create warrior character
 */
class Warrior extends Character
{
    public function __construct($name){
        parent::__construct($name, 350,'Ombre noir', 150, 200, 'Guerrier');
    }  
}

