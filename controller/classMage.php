<?php



/**
 * Crée un personnagde de type Mage
 */

class Mage extends Personnage
{
    public function __construct($name){
        parent::__construct($name, 350,'Mage noir', 200, 'Mage');
    }  
}

