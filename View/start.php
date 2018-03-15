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
                                <span>Type*:</span>
                                <select class="select" name="classPerso1" id="idPerso1" required>
                                    <option value="magician">Magicien</option> 
                                    <option value="elf">Elfe</option>
                                    <option value="dwarf">Nain</option>
                                    <option value="war">Guerrier</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <h4>Personnage 2:</h4>
                            <div>
                                <label for="field-perso2">Nom*:</label>
                                <input type="text" id="field-perso2">
                                <span>Type*:</span>
                                <select class="select" name="selectPerso2" id="select-perso2">
                                    <option value="magician">Magicien</option> 
                                    <option value="elf">Elfe</option>
                                    <option value="dwarf">Nain</option>
                                    <option value="war">Guerrier</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <h4>Personnage 3:</h4>
                            <div>
                                <label for="field-perso3">Nom*:</label>
                                <input type="text" id="field-perso3">
                                <span>Type*:</span>
                                <select class="select" name="selectPerso3" id="select-perso1">
                                    <option value="magician">Magicien</option> 
                                    <option value="elf">Elfe</option>
                                    <option value="dwarf">Nain</option>
                                    <option value="war">Guerrier</option>
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
                                <input type="text"name='monster1' id="field-perso4">
                                <span>Type*:</span>
                                <select class="select" name="selectPerso4" id="select-perso4">
                                    <option value="magus">Mage noir</option> 
                                    <option value="orc">Orque</option>
                                    <option value="gobelin">Gobelin</option>
                                    <option value="blackShadow">Ombre noir</option>
                                    <option value="sauron">Sauron</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <h4>Personnage 2:</h4>
                            <div>
                                <label for="field-perso5">Nom*:</label>
                                <input type="text" id="field-perso5">
                                <span>Type*:</span>
                                <select class="select" name="selectPerso5" id="select-perso5">
                                    <option value="magus">Mage noir</option> 
                                    <option value="orc">Orque</option>
                                    <option value="gobelin">Gobelin</option>
                                    <option value="blackShadow">Ombre noir</option>
                                    <option value="sauron">Sauron</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <h4>Personnage 3:</h4>
                            <div>
                                <label for="field-perso6" >Nom*:</label>
                                <input type="text" id="field-perso6">
                                <span>Type*:</span>
                                <select class="select" name="selectPerso6" id="select-perso6">
                                    <option value="magus">Mage noir</option> 
                                    <option value="orc">Orque</option>
                                    <option value="gobelin">Gobelin</option>
                                    <option value="blackShadow">Ombre noir</option>
                                    <option value="sauron">Sauron</option>
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

