<?php include ('header.php'); ?>
    <div class="section-image"></div>
    <section class="section-fight">
        <h2>Déroulé du combat</h2>
        <hr/>
        <?php  
            if(!isset($_POST['submit']) )
            {
                //be sure to validate and clean your variables
                $name = $_POST['name'];
                $type = $_POST['type'];
                echo 'Nom : '.$name.' type: '.$type;
            }
            ?>
        <div class="action">
            <div class="action-title">
                <p class="action-number">Action 1</p>
                <p class="action-whoAttack">Gandalf attaque Sarouman</p>
                
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
                            <td>Gandalf</td>
                            <td>Magician</td>
                            <td>2</td>
                            <td>100%</td>
                        </tr>
                        <tr>
                            <td>Gimli</td>
                            <td>Nain</td>
                            <td>1</td>
                            <td>100%</td>
                        </tr>
                        <tr>
                            <td>Legolas</td>
                            <td>Elfe</td>
                            <td>1</td>
                            <td>100%</td>
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
                            <td>Sarouman</td>
                            <td>Magician</td>
                            <td>1</td>
                            <td>50%</td>
                        </tr>
                        <tr>
                            <td>Sauron</td>
                            <td>Nain</td>
                            <td>1</td>
                            <td>100%</td>
                        </tr>
                        <tr>
                            <td>Roger rabbit</td>
                            <td>Big boss</td>
                            <td>1</td>
                            <td>100%</td>
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
