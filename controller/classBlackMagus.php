<?php
/**
 * create dwarf character
 */

class BlackMagus extends Character
{

    public function __construct($name){
        parent::__construct($name, 400,'Magicien', 100, 200, 'Mage noir');
    }  
    
}