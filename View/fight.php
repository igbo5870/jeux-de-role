<?php include ('header.php'); 
      include ('../controller/classPersonnage.php');
      include ('../controller/classMage.php');
      include ('../controller/classGuerrier.php');
      include ('../controller/classDwarf.php');
      include ('../controller/classElf.php');

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
                    case 'magician' : $hero1 = new Mage($nameHero);
                        print_r($hero1) ;break;
                    case 'elf' : $hero1 = new Elfe($nameHero);
                        print_r($hero1);break;
                    case 'dwarf' : $hero1 = new Dwarf($nameHero);
                        var_dump($hero1);break;
                    case 'war' : $hero1 = new Guerrier($nameHero);
                        var_dump($hero1);break;
                }

                $nameMonster = $_POST['monster1'];
                $typeMonster = $_POST['selectPerso4'];

                switch($typeMonster){
                    case 'magician' : $monster1 = new Mage($nameMonster);
                        print_r($monster1) ;break;
                    case 'elf' : $monster1 = new Elfe($nameMonster);
                        print_r($monster1);break;
                    case 'dwarf' : $monster1 = new Dwarf($nameMonster);
                        var_dump($monster1);break;
                    case 'war' : $monster1 = new Guerrier($nameMonster);
                        var_dump($monster1);break;
                }
            }
            ?>
        <div class="action">
            <div class="action-title">
                <p class="action-number">Action 1</p>
                <p class="action-whoAttack"><?php echo $nameHero;?> attaque Sarouman</p>
                
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
                            <td><?php echo $nameNomster ?></td>
                            <td><?php echo $typeMonster ?></td>
                            <td>1</td>
                            <td><?php $monster1->__getLife ?></td>
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
