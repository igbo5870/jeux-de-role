<?php

class Dwarf extends Personnage
{
    public function __construct($name){
        parent::__construct($name, 125,'Ombre noir', 450, 'Nain');
    }  
}