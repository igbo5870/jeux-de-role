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
        include ('selectCharacter.php');
    ?>
    <?php
        include ('action.php');
    ?>    
    <h2>Fin du combat</h2>
    <hr/>
    <?php
        if ($arrayMonster[0]->__getLife() == 0) {
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