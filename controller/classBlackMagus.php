<?php
/**
 * create dwarf character
 */
class BlackMagus extends Character
{
    public function __construct($name){
        parent::__construct($name, 400,'Ombre noir', 150, 'Mage noir');
    }  
}