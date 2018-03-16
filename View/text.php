<?php
    include ('header.php'); 
    function __autoload($class) {
        include '../controller/class' . $class . '.php';
    }
?>
    <div class="section-image"></div>
    <section class="section-fight">
        <h2>Déroulé du combat</h2>
        <hr/>
        <?php  
    
            if(!isset($_POST['submit']) )
            {
                //Data hero
                $nameHero = 'Gimli';
                $typeHero = 'Nain';
                
                switch($typeHero){
                    case 'Magicien' : $hero1 = new Magician($nameHero);
                        ;break;
                    case 'Elfe' : $hero1 = new Elf($nameHero);
                        ;break;
                    case 'Nain' : $hero1 = new Dwarf($nameHero);
                        ;break;
                    case 'Guerrier' : $hero1 = new Warrior($nameHero);
                        ;break;
                }

                $nameMonster = 'Lardeur';
                $typeMonster = 'Gobelin';

                switch($typeMonster){
                    case 'Mage noir' : $monster1 = new BlackMagus($nameMonster);
                        ;break;
                    case 'Orque' : $monster1 = new Orc($nameMonster);
                        ;break;
                    case 'Gobelin' : $monster1 = new Goblin($nameMonster);
                        ;break;
                    case 'Ombre noir' : $monster1 = new BlackShadow($nameMonster);
                        ;break;
                    case 'Sauron' : $monster1 = new Sauron($nameMonster);
                        ;break;
                }

               $i = 0;
               do{
                $i++;
                $hero1->attaquer($monster1);
                if($i%2 == 0){
                    echo 'i = '.$i;
                }else{
                    echo 'i = '.$i;
                }
                if($monster1->__getLife() <= 0){
                    return false;
                }
               }while(true);



            }
            ?>
