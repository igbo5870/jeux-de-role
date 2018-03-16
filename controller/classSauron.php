<?php
/**
 * create sauron character
 */
class Sauron extends Character
{
    public function __construct($name){
        parent::__construct($name, 1000,'', 200, 400, 'Sauron');
    }  
}