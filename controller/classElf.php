<?php

/**
 * create elf character
 */
class Elf extends Character
{
    public function __construct($name){
        parent::__construct($name, 500,'Ombre noir', 0, 300, 'Elfe');
    }  
}
