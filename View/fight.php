<?php include ('header.php'); 
      include ('../controller/classCharacters.php');
      include ('../controller/classMagician.php');
      include ('../controller/classWarrior.php');
      include ('../controller/classDwarf.php');
      include ('../controller/classElf.php');
      include ('../controller/classBlackMagus.php');
      include ('../controller/classBlackShadow.php');
      include ('../controller/classGoblin.php');
      include ('../controller/classOrc.php');
      include ('../controller/classSauron.php');

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
                        print_r($hero1) ;break;
                    case 'Elfe' : $hero1 = new Elf($nameHero);
                        print_r($hero1);break;
                    case 'Nain' : $hero1 = new Dwarf($nameHero);
                        var_dump($hero1);break;
                    case 'Guerrier' : $hero1 = new Warrior($nameHero);
                        var_dump($hero1);break;
                }

                // Data monster
                $nameMonster = $_POST['monster1'];
                $typeMonster = $_POST['selectPerso4'];

                switch($typeMonster){
                    case 'Mage noir' : $monster1 = new BlackMagus($nameMonster);
                        print_r($monster1) ;break;
                    case 'Orque' : $monster1 = new Orc($nameMonster);
                        print_r($monster1);break;
                    case 'Gobelin' : $monster1 = new Goblin($nameMonster);
                        var_dump($monster1);break;
                    case 'Ombre noir' : $monster1 = new BlackShadow($nameMonster);
                        var_dump($monster1);break;
                    case 'Sauron' : $monster1 = new Sauron($nameMonster);
                        var_dump($monster1);break;
                }
            }
            ?>
        <div class="action">
            <div class="action-title">
                <p class="action-number">Action 1</p>
                <p class="action-whoAttack"><?php echo $nameHero;?> attaque <?php echo $nameMonster?></p>
                
            </div>
            <p class="number-damage">Coup portée: 25</p>
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
                            <td>2</td>
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
        <h2>Fin du combat</h2>
        <hr/>
        <div class="result-fight">
            <p>Victoire !</p>
            <p>L'ennemi est vaincu.</p>
        </div>
        <div class="section-fight--text">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum modi, dolor quidem doloribus unde deleniti et ullam, molestias nulla optio repellat quo sapiente. Temporibus doloremque soluta molestiae officia aperiam voluptatum!</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil repellat accusamus odit magni perferendis esse, itaque labore rerum et dolore cumque quod, sunt, molestiae doloremque eveniet cupiditate beatae nostrum voluptates?</p>
        </div>
    </section>
<?php include ('footer.php'); ?>
