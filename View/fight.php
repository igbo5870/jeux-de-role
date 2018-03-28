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

        <!-- Action 1 <<<< BEGIN >>>> -->
        <?php 
            $statutLife = true;
            $i = 0;
            do{
                $i++;
                if($monster1->__getLife() <= 0 || $hero1->__getLife()<= 0){
                
                $statutLife = false;break;
            }
        ?>
        <div class="action">
            <div class="action-title">
                <p class="action-number"><?php echo 'Action '.$i; ?></p>
                <?php if($i%2 != 0){ ?>
                <p class="action-whoAttack"><?php echo $nameHero;?> attaque <?php echo $nameMonster?>
                <img class="icones" src="image/iconedown.png" alt="details visible" width= "30" height="30">
                </p>      
            </div>
            <!-- Action odd 'impair' <<<< BEGIN >>>> -->    
            <div class="notvisible">
                <p class="number-damage">Coup portée: 
                <?php echo $hero1->attaquer($monster1); ?>
                </p>
                <?php 
                }else{
                ?>
                <p class="action-whoAttack">
                <?php echo $nameMonster;?> attaque <?php echo $nameHero?>
                <img class="icones" src="image/iconedown.png" alt="details visible" width= "30" height="30">
                </p>
            </div>                  
            <!-- Action odd 'impair' <<<< END >>>> -->
            <!-- Action peer 'pair' <<<< BEGIN >>>> -->  
            <div class="notvisible">
                <p class="number-damage">Coup portée: <?php echo $monster1->attaquer($hero1); ?></p><?php }?>
                <div class="fight-character">
                    <div class="fight-heros">
                        <p>Héros:</p>
                        <table style="width:100%">
                            <tr>
                                <th>Nom</th>
                                <th>Type</th>
                                <th>Niveau</th>
                                <th>Vie</th>
                            </tr>
                            <tr>
                                <td><?php echo $nameHero ?></td>
                                <td><?php echo $typeHero ?></td>
                                <td><?php echo "1";?></td>
                                <td><?php echo $hero1->__getLife() ?></td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        </table>
                    </div>   
                    <div class="fight-monsters">
                        <p>Monstres:</p>
                        <table style="width:100%">
                            <tr>
                                <th>Nom</th>
                                <th>Type</th>
                                <th>Niveau</th>
                                <th>Vie</th>
                            </tr>
                            <tr>
                                <td><?php echo $nameMonster ?></td>
                                <td><?php echo $typeMonster ?></td>
                                <td>1</td>
                                <td><?php echo $monster1->__getLife() ?></td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>     
            </div> 
            <?php }while($statutLife === true);?>
        </div>
        <!-- Action 1 <<<< END >>>> -->
        <!-- Action peer 'pair' <<<< END >>>> --> 
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