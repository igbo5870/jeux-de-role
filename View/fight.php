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
            $nameHero = $_POST['perso1'];
            $typeHero = $_POST['classPerso1'];
            
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

            // Data monster
            $nameMonster = $_POST['monster1'];
            $typeMonster = $_POST['selectPerso4'];

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
        }
    ?>
    <?php
    include ('action.php');
    ?>    
    <h2>Fin du combat</h2>
    <hr/>
    <?php
        if ($monster1->__getLife() == 0) {
            echo '<div class="result-fight"><p>Victoire !</p><p>Vous avez vaincu votre ennemi.</p></div>';
        }else{
            echo '<div class="result-fight"><p>Défaite !</p><p>Vous avez étais vaincu.</p></div>';
        }
    ?>
    <div class="section-fight--text">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum modi, dolor quidem doloribus unde deleniti et ullam, molestias nulla optio repellat quo sapiente. Temporibus doloremque soluta molestiae officia aperiam voluptatum!</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil repellat accusamus odit magni perferendis esse, itaque labore rerum et dolore cumque quod, sunt, molestiae doloremque eveniet cupiditate beatae nostrum voluptates?</p>
    </div>
</section>
<?php include ('footer.php'); ?>