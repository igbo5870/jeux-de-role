<?php include ('header.php'); ?>
    <div class="section-image"></div>
    <main>
        <form method='POST' action='fight.php'>
            <h2>Créez vos équipes</h2>
            <hr/>
            <div class="section-start">
                <div class="heros">
                    <h3>Les héros</h3>
                        <div>
                            <h4>Personnage 1:</h4>
                            <div>
                                <label for="field-perso1" >Nom*:</label>
                                <input type="text" id="field-perso1" name="perso1" required>
                                <label for="select-perso1">Type*:</label>
                                <select class="select" name="classPerso1" id="select-perso1" required>
                                    <option value="Magicien">Magicien</option> 
                                    <option value="Elfe">Elfe</option>
                                    <option value="Nain">Nain</option>
                                    <option value="Guerrier">Guerrier</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <h4>Personnage 2:</h4>
                            <div>
                                <label for="field-perso2">Nom:</label>
                                <input type="text" id="field-perso2">
                                <label for="select-perso2">Type:</label>
                                <select class="select" name="selectPerso2" id="select-perso2">
                                    <option value="Magicien">Magicien</option> 
                                    <option value="Elfe">Elfe</option>
                                    <option value="Nain">Nain</option>
                                    <option value="Guerrier">Guerrier</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <h4>Personnage 3:</h4>
                            <div>
                                <label for="field-perso3">Nom:</label>
                                <input type="text" id="field-perso3">
                                <label for="select-perso3">Type:</label>
                                <select class="select" name="selectPerso3" id="select-perso3">
                                    <option value="Magicien">Magicien</option> 
                                    <option value="Elfe">Elfe</option>
                                    <option value="Nain">Nain</option>
                                    <option value="Guerrier">Guerrier</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="monster">
                        <h3>Les monstres</h3>
                        <div>
                            <h4>Personnage 1:</h4>
                            <div>
                                <label for="field-perso4">Nom*:</label>
                                <input type="text" id="field-perso4" name='monster1' required>
                                <label for="select-perso4">Type*:</label>
                                <select class="select" name="selectPerso4" id="select-perso4" required>
                                    <option value="Mage noir">Mage noir</option> 
                                    <option value="Orque">Orque</option>
                                    <option value="Gobelin">Gobelin</option>
                                    <option value="Ombre noir">Ombre noir</option>
                                    <option value="Sauron">Sauron</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <h4>Personnage 2:</h4>
                            <div>
                                <label for="field-perso5">Nom:</label>
                                <input type="text" id="field-perso5">
                                <label for="select-perso5">Type:</label>
                                <select class="select" name="selectPerso5" id="select-perso5">
                                <option value="Mage noir">Mage noir</option> 
                                    <option value="Orque">Orque</option>
                                    <option value="Gobelin">Gobelin</option>
                                    <option value="Ombre noir">Ombre noir</option>
                                    <option value="Sauron">Sauron</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <h4>Personnage 3:</h4>
                            <div>
                                <label for="field-perso6" >Nom:</label>
                                <input type="text" id="field-perso6">
                                <label for="select-perso6">Type:</label>
                                <select class="select" name="selectPerso6" id="select-perso6">
                                <option value="Mage noir">Mage noir</option> 
                                    <option value="Orque">Orque</option>
                                    <option value="Gobelin">Gobelin</option>
                                    <option value="Ombre noir">Ombre noir</option>
                                    <option value="Sauron">Sauron</option>
                                </select>
                            </div>
                        </div>
                </div>
            </div>
            <div class="startGame">
                    <p>Tout les champs munis d'une * sont obligatoires.</p>
                    <input type='submit' value='Commencer' class='class-button'>
            </div>
        </form>
    </main>
<?php include ('footer.php'); ?>

