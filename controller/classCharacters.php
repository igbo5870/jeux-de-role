<?php
/**
 * Create a basis character
 */

 /////////////////////////////////////////////////////////////////////////////////// 
 //                                      TODO                                     //
 //  ///////////////////////////////////////////////////////////////////////////  //                                                                             //
 // - Mettre la plage de force à tous les monde avec une force min et force max   //
 // - Faire une fiche qui présente les caractéristique des personnages            //
 // - Faire calculer les bonus suivant l'équipe                                   //
 // - Faire le combat                                                             //
 //                                                                               //
 ///////////////////////////////////////////////////////////////////////////////////
class Character
{
    protected $name;
    protected $life;
    protected $bonus;
    protected $strength;
    protected $type;

    public function __construct($name, $life, $bonus, $strength, $type){
        $this->name = $name;
        $this->life = $life;
        $this->bonus = $bonus;
        $this->strength = $strength;
        $this->type = $type;
    }  
    /**
     * Fonction qui permet de récupérer le nom du personnage 
     *
     * @return string name
     */
    public function __getName(){
        return $this->name;
    }

    /**
     * Récupère le nombre de vie du personnage
     *
     * @return integer life
     */
    public function __getLife(){
        return $this->life;
    }

    /**
     * Récupère la valeurs force du personnage
     *
     * @return int force
     */
    public function __getStrength(){
        return $this->strength;
    }

    /**
     * Récupère le type de personnage
     *
     * @return string type
     */
    public function __getType(){
        return $this->type;
    }

    /**
     * Fonction qui permet à un personnage d'attaquer un autre personnage
     * et de lui faire des dégâts.
     * @param [string] La cible de l'attaque 
     * @return void
     */
    public function attaquer($cible){
        $cible->life -= ($this->strength);
    }
}