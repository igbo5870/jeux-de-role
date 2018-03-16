<?php
/**
 * Create magician character
 */

class Magician extends Character
{
    public function __construct($name){
        parent::__construct($name, 400,'Mage noir', 100, 200, 'Magicien');
    }  
}

