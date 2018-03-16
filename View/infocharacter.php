<?php include ('header.php'); ?>
<main>
    <section>
        <h2>Déroulement du combat</h2>
        <hr>
        <p>1/ Le combat se déroule au coup par coup, en commencant par le premier personnage des héros. (le héros 1 attaque le monstre 1)</p>
        <p>2/ Une fois le premier personnage vaincu, le jeu passe automatiquement au personnage suivant.</p>
        <p>3/ Le coup porté par l'attaquant est un nombre aléatoire compris entre les deux extrémités de sa force.</p>
        <p>4/ Si un personnage attaque sa spécialité(cf. rôles), ses coups sont multipliés par 1,5.</p>
        <p>5/ Si un personnage tue un autre personnage, son niveau augmente. Chaque niveau augmente la force de 50.</p>
        <p>6/ Le jeu est gagné lorsqu'il ne reste plus que des héros.</p>
        <p>7/ Le jeu est perdu lorsqu'il ne reste plus que des monstres</p>
        <h2>Compétences spéciales</h2>
        <hr>
        <p>1/ Si il y a deux gobelins dans l'équipe des monstres, leur force est multiplié par 2.</p>
        <p>2/ Si il reste moins de 100 points de vie au magicien, sa force s'étend à 300.</p>
        <p>3/ Si Sauron se trouve face à 3 héros, ses coups sont multipliés par 1,5</p>
        <h2>Rôles</h2>
        <hr>
        <table style="width:100%">
            <tr>
                <th>Type</th>
                <th>côté</th>
                <th>Force</th>
                <th>Vie</th>
                <th>Spécialité</th>
            </tr>
            <tr>
                <td>Magicien</td>
                <td>Héros</td>
                <td>100 - 200</td>
                <td>400</td>
                <td>Mage noir</td>
            </tr>
            <tr>
                <td>Elfe</td>
                <td>Héros</td>
                <td>0 - 300</td>
                <td>500</td>
                <td>Orque</td>
            </tr>
            <tr>
                <td>Nain</td>
                <td>Héros</td>
                <td>100 - 150</td>
                <td>450</td>
                <td>Gobelin</td>
            </tr>
            <tr>
                <td>Guerrier</td>
                <td>Héros</td>
                <td>150 - 200</td>
                <td>350</td>
                <td>Ombre noir</td>
            </tr>
            <tr>
                <td>Mage noir</td>
                <td>Monstre</td>
                <td>100 - 200</td>
                <td>400</td>
                <td>Magicien</td>
            </tr>
            <tr>
                <td>Orque</td>
                <td>Monstre</td>
                <td>200 - 200</td>
                <td>400</td>
                <td>Nain</td>
            </tr>
            <tr>
                <td>Gobelin</td>
                <td>Monstre</td>
                <td>50 - 200</td>
                <td>250</td>
                <td>Guerrier</td>
            </tr>
            <tr>
                <td>Ombre noir</td>
                <td>Monstre</td>
                <td>150 - 250</td>
                <td>350</td>
                <td>Elfe</td>
            </tr>
            <tr>
                <td>Sauron</td>
                <td>Monstre</td>
                <td>200 - 400</td>
                <td>1000</td>
                <td>-</td>
            </tr>
        </table>
        <a class="returnPage-start" href="start.php">"Créez vos équipes".</a>
    </section>
</main>
<?php include ('footer.php'); ?>