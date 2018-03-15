<?php
/**
 * Créer un nouveau personnage avec des caractéristiques de base 
 */
class Personnage
{
    protected $name;
    protected $life;
    protected $bonus;
    protected $force;
    protected $type;

    public function __construct($name, $life, $bonus, $force, $type){
        $this->name = $name;
        $this->life = $life;
        $this->bonus = $bonus;
        $this->force = $force;
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
    public function __getForce(){
        return $this->force;
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
        $cible->life -= ($this->force + $this->bonus);
    }
}