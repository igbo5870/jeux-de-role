# Créer un jeu de rôle


## IHM
* une page d'accueil contenant un titre et un lien vers le formulaire de création d'équipes
* une page création d'équipes
* une page de déroulement du combat


## Consignes
*Chaque consigne est associé à un niveau de difficulté classé de 1 (facile) à 3 (difficile)*

### Création des équipes ###
1. Chaque équipe contient un personnage **niveau 1**
2. Chaque équipe contient trois personnages **niveau 3**
3. Chaque personnage doit avoir un nom et un rôle associé (cf rôles) **niveau 1**
4. Les rôles des personnages sont expliqués dans l'écran **niveau 3**

### Affichage du déroulement du combat ###
1. Tous les coups du combat sont affichés dans la zone "Déroulé du combat" dans la troisième page **niveau 1**
2. Chaque coup est représenté sous forme d'accordéon où : le numéro du coup et l'action font parties du titre, les points du coup porté sont affichés dans le contenu **niveau 2**
3. L'état des personnages est représenté dans la partie contenu de chaque coup **niveau 3**
 
### Déroulement du combat ###
1. Le combat se déroulent au coup par coup, en commencant par le premier personnage des héros. (le héros 1 attaque le monstre 1) **niveau 1**
2. Une fois le premier personnage vaincu, le jeu passe automatiquement au personnage suivant (cf exemple de combat) **niveau 1**
3. Le coup porté par l'attaquant est un nombre aléatoire compris entre les deux extrémités de sa force **niveau 1**
4. Si un personnage attaque sa spécialité (cf rôles), ses coups sont multipliés par 1.5 **niveau 2**
5. Si un personnage tue un autre personnage, son niveau augmente. Chaque niveau augmente la force de 50 **niveau 2**
6. Le jeu est gagné lorsqu'il ne reste plus que des héros **niveau 1**
7. Le jeu est perdu lorsqu'il ne reste plus que des monstres **niveau 1** 

### Compétences spéciales ###
1. Si il y a deux gobelins dans l'équipe des monstres, leur force est multiplié par 2 **niveau 3**
2. Si il reste moins de 100 points de vie au magicien, sa force s'éttend à 300 **niveau 3**
3. Si Sauron se trouve face à 3 héros, ses coups sont multipliés par 1.5 **niveau 2**


## Rôles
| Type          | Côté          | Force         | Points de vie | Spécialité    |
| ------------- | ------------- | ------------- | ------------- | ------------- |
| Magicien      |  Héros        | 100 - 200     | 400           | Mage noir     |
| Elfe          |  Héros        | 0 - 300       | 500           | Orque         |
| Nain          |  Héros        | 100 - 150     | 450           | Gobelin       |
| Guerrier      |  Héros        | 150 - 200     | 350           | Ombre noir    |
| Mage noir     |  Monstre      | 100 - 200     | 400           | Magicien      |
| Orque         |  Monstre      | 200 - 200     | 400           | Nain          |
| Gobelin       |  Monstre      | 50 - 200      | 250           | Guerier       |
| Ombre noir    |  Monstre      | 150 - 250     | 350           | Elfe          |
| Sauron        |  Monstre      | 200 - 400     | 1000          |               |


## Exemple de combat
* Le héro 1 attaque le monstre 1
* le monstre 1 attaque le héro 1, le monstre 1 tue le héro 1
* le héro 2 attaque le monstre 1, le héro 2 tue le monstre 1
* le monstre 2 attaque le héros 2
* le héro 2 attaque le monstre 2, le héro 2 tue le monstre 2
* le monstre 3 attaque le héro 2, le monstre 3 tue le héro 2
* le héro 3 attaque le monstre 3, le héro 3 tue le monstre 3, la partie est gagnée


## Compétences
* Maquetter une appplication (niveau 3)
* Développer une interface utilisateur (niveau 2)
* Développer une page web en lien avec une base de donnée (niveau 1)
* Développer une application simple de mobilité numérique (niveau 1)
* Utiliser l'anglais dans son activité professionnelle en informatique (niveau 1)


## Tips
* POO first (penser à l'héritage)
* L'architecture de l'application est primordiale, commencer par la définir
* Penser mobilité