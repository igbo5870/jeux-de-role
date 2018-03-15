<?php



/**
 * Crée un personnagde de type Guerrier 
 */
class Guerrier extends Personnage
{
    public function __construct($name){
        parent::__construct($name, 100,'Ombre noir', 200, 'Guerrier');
    }  
}

