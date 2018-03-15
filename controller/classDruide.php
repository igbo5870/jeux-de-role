<?php

/**
 * Crée un personnage de type Druide
 */
class Druide extends Personnage 
{
    public function __construct($name){
        parent::__construct($name, 300, 'Mage noir', 300, 'Druide');
    }
}