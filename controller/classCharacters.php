<?php
/**
 * Create a basis character
 */
class Character
{
    protected $name;
    protected $life;
    protected $bonus;
    protected $strengthMin;
    protected $strengthMax;
    protected $type;

    public function __construct($name, $life, $bonus, $strengthMin, $strenghMax, $type){
        $this->name = $name;
        $this->life = $life;
        $this->bonus = $bonus;
        $this->strengthMin = $strengthMin;
        $this->strengthMax = $strengthMax;
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
     * Récupère la valeurs min de la force du personnage
     *
     * @return int force
     */
    public function __getStrengthMin(){
        return $this->strengthMin;
    }

        /**
     * Récupère la valeurs max de la force du personnage
     *
     * @return int force
     */
    public function __getStrengthMax(){
        return $this->strengthMax;
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
        $cible->life -= ($this->strength + $this->bonus);
    }
}