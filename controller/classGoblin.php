<?php
/**
 * create dwarf character
 */
class Goblin extends Character
{
    public function __construct($name){
        
        parent::__construct($name, 250,'Guerrier', 50, 200, 'Gobelin');
    }  
}