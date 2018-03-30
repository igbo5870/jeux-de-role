<!-- Action 1 <<<< BEGIN >>>> -->
<?php 
    $statutLife = true;
    $i = 0;
    while($statutLife === true) {
        $i++;
?>

<div class="action">
    <div class="action-title">
        <p class="action-number">
            <?php echo 'Action '.$i; ?>
        </p>
        <?php if($i%2 != 0){ ?>
        <p class="action-whoAttack">
            <?php
                switch ($dieMonster) {
                    //Combat Héro1 Vs. Monster1
                    case 0:
                        $attak = $arrayHero[0]->attaquer($arrayMonster[0]);
                        $lifeLess = $arrayMonster[0]->__getLife();
                        if ( $lifeLess === 0) {             
                            echo $nameHero1 ." attaque ". $nameMonster1 .", ". $nameMonster1 .' est mort!';
                            $dieMonster = 1;
                            $statutLife = false;             
                        }else{
                            echo $nameHero1 ." attaque ". $nameMonster1;
                        }
                        break;
                }
            ?>
            <img class="icones" src="image/iconedown.png" alt="details visible" width= "30" height="30">
        </p>      
    </div>

    <!-- Action odd 'impair' <<<< BEGIN >>>> -->    
    <div class="notvisible">
        <p class="number-damage">Coup portée: 
        <?php
            echo $attak;
        ?>
        </p>
        <?php }else{ ?>
        <p class="action-whoAttack">
            <?php
                switch ($dieMonster) {
                    //Combat Monster1 Vs. Hero1
                    case 0:
                        $attak = $arrayMonster[0]->attaquer($arrayHero[0]);
                        $lifeLess = $arrayHero[0]->__getLife();
                        if ( $lifeLess === 0) {             
                            echo $nameMonster1 ." attaque ". $nameHero1.", ". $nameHero1 .' est mort!';
                            $dieHero = 1;
                            $statutLife = false;             
                        }else{
                            echo $nameMonster1 ." attaque ". $nameHero1;
                        }
                        break;
                    case 1:
                        $arrayMonster[0]->attaquer($arrayHero[1]);
                        break;
                    case 2:
                        $arrayMonster[0]->attaquer($arrayHero[2]);
                        break;
                }
            ?>
            <img class="icones" src="image/iconedown.png" alt="details visible" width= "30" height="30">
        </p>
    </div>                  
    <!-- Action odd 'impair' <<<< END >>>> -->

    <!-- Action peer 'pair' <<<< BEGIN >>>> -->  
    <div class="notvisible">
        <p class="number-damage">
            Coup portée: 
            <?php 
                echo $attak;
            ?>
        </p>
        <?php }?>
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
                        <td><?php echo $nameHero1 ?></td>
                        <td><?php echo $typeHero1 ?></td>
                        <td><?php echo "1";?></td>
                        <td><?php echo $arrayHero[0]->__getLife() ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $nameHero2?></td>
                        <td><?php echo $typeHero2 ?></td>
                        <td><?php echo "1";?></td>
                        <td><?php echo $arrayHero[1]->__getLife() ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $nameHero3?></td>
                        <td><?php echo $typeHero3 ?></td>
                        <td><?php echo "1";?></td>
                        <td><?php echo $arrayHero[2]->__getLife() ?></td>
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
                        <td><?php echo $nameMonster1 ?></td>
                        <td><?php echo $typeMonster1 ?></td>
                        <td><?php echo "1";?></td>
                        <td><?php echo $arrayMonster[0]->__getLife() ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $nameMonster2 ?></td>
                        <td><?php echo $typeMonster2 ?></td>
                        <td><?php echo "1";?></td>
                        <td><?php echo $arrayMonster[1]->__getLife() ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $nameMonster3 ?></td>
                        <td><?php echo $typeMonster3 ?></td>
                        <td><?php echo "1";?></td>
                        <td><?php echo $arrayMonster[2]->__getLife() ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>     
    </div> 
    <?php }?>
</div>
<!-- Action 1 <<<< END >>>> -->
<!-- Action peer 'pair' <<<< END >>>> --> 