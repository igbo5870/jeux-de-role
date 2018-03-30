<?php
if(!isset($_POST['submit']) )
{
    //Data hero
    $nameHero1 = $_POST['perso1'];
    $typeHero1 = $_POST['classPerso1'];
    $nameHero2 = $_POST['perso2'];
    $typeHero2 = $_POST['selectPerso2'];
    $nameHero3 = $_POST['perso3'];
    $typeHero3 = $_POST['selectPerso3'];

    $arrayHero = [];
    $dieHero = 0;
    
    switch($typeHero1){
        case 'Magicien' : 
            $arrayHero[] = new Magician($nameHero1);
            ;break;
        case 'Elfe' : 
            $arrayHero[] = new Elf($nameHero1);
            ;break;
        case 'Nain' : 
            $arrayHero[] = new Dwarf($nameHero1);
            ;break;
        case 'Guerrier' : 
            $arrayHero[] = new Warrior($nameHero1);
            ;break;
    }

    switch($typeHero2){
        case 'Magicien' : 
            $arrayHero[] = new Magician($nameHero2);
            ;break;
        case 'Elfe' : 
            $arrayHero[] = new Elf($nameHero2);
            ;break;
        case 'Nain' : 
            $arrayHero[] = new Dwarf($nameHero2);
            ;break;
        case 'Guerrier' : 
            $arrayHero[] = new Warrior($nameHero2);
            ;break;
    }

    switch($typeHero3){
        case 'Magicien' : 
            $arrayHero[] = new Magician($nameHero3);
            ;break;
        case 'Elfe' : 
            $arrayHero[] = new Elf($nameHero3);
            ;break;
        case 'Nain' : 
            $arrayHero[] = new Dwarf($nameHero3);
            ;break;
        case 'Guerrier' : 
            $arrayHero[] = new Warrior($nameHero3);
            ;break;
    }

    // Data monster
    $nameMonster1 = $_POST['monster1'];
    $typeMonster1 = $_POST['selectPerso4'];
    $nameMonster2 = $_POST['monster2'];
    $typeMonster2 = $_POST['selectPerso5'];
    $nameMonster3 = $_POST['monster3'];
    $typeMonster3 = $_POST['selectPerso6'];

    $arrayMonster = [];
    $dieMonster = 0;

    switch($typeMonster1){
        case 'Mage noir' : 
            $arrayMonster[] = new BlackMagus($nameMonster1);
            ;break;
        case 'Orque' : 
            $arrayMonster[] = new Orc($nameMonster1);
            ;break;
        case 'Gobelin' : 
            $arrayMonster[] = new Goblin($nameMonster1);
            ;break;
        case 'Ombre noir' : 
            $arrayMonster[] = new BlackShadow($nameMonster1);
            ;break;
        case 'Sauron' : 
            $arrayMonster[] = new Sauron($nameMonster1);           
            ;break;
    }

    switch($typeMonster2){
        case 'Mage noir' : 
            $arrayMonster[] = new BlackMagus($nameMonster2);
            ;break;
        case 'Orque' : 
            $arrayMonster[] = new Orc($nameMonster2);
            ;break;
        case 'Gobelin' : 
            $arrayMonster[] = new Goblin($nameMonster2);
            ;break;
        case 'Ombre noir' : 
            $arrayMonster[] = new BlackShadow($nameMonster2);
            ;break;
        case 'Sauron' : 
            $arrayMonster[] = new Sauron($nameMonster2);           
            ;break;
    }

    switch($typeMonster3){
        case 'Mage noir' : 
            $arrayMonster[] = new BlackMagus($nameMonster3);
            ;break;
        case 'Orque' : 
            $arrayMonster[] = new Orc($nameMonster3);
            ;break;
        case 'Gobelin' : 
            $arrayMonster[]  = new Goblin($nameMonster3);
            ;break;
        case 'Ombre noir' : 
            $arrayMonster[] = new BlackShadow($nameMonster3);
            ;break;
        case 'Sauron' : 
            $arrayMonster[] = new Sauron($nameMonster3);           
            ;break;
    }
}
?>