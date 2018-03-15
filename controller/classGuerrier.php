<?php



/**
 * Crée un personnagde de type Guerrier 
 */
class Guerrier extends Personnage
{
    public function __construct($name){
        $force = random(100, 400);
        parent::__construct($name, $force,'Ombre noir', 200, 'Guerrier');
    }  
}

