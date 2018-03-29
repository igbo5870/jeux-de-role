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
                $attak = $hero1->attaquer($monster1);
                $lifeLess = $monster1->__getLife();
                if ( $lifeLess <= 0) {             
                    echo $nameHero ." attaque ". $nameMonster .", ". $nameMonster .' est mort!';
                    $statutLife = false;
                }else{
                    echo $nameHero ." attaque ". $nameMonster;
                }
            ?>
            <img class="icones" src="image/iconedown.png" alt="details visible" width= "30" height="30">
        </p>      
    </div>

    <!-- Action odd 'impair' <<<< BEGIN >>>> -->    
    <div class="notvisible">
        <p class="number-damage">Coup portée: 
        <?php echo $attak; ?>
        </p>
        <?php 
        }else{
        ?>
        <p class="action-whoAttack">
            <?php
                $attak = $monster1->attaquer($hero1);
                $lifeLess = $hero1->__getLife();
                if ($lifeLess === 0) {             
                    echo $nameMonster ." attaque ". $nameHero.", ". $nameHero .' est mort!';
                    $statutLife = false;
                }else{
                    echo $nameMonster ." attaque ". $nameHero;
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
            <?php echo $attak; ?>
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
    <?php }?>
</div>
<!-- Action 1 <<<< END >>>> -->
<!-- Action peer 'pair' <<<< END >>>> --> 