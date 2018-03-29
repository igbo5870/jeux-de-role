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
    protected $strengthMin;
    protected $strengthMax;
    protected $type;

    public function __construct($name, $life, $bonus, $strengthMin, $strengthMax, $type){
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
        if($this->life <= 0){
            return $this->life =0;
        }else{
            return $this->life;
        }
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

    public function __getBonus(){
        return $this->bonus;
    }

    /**
     * Fonction qui permet à un personnage d'attaquer un autre personnage
     * et de lui faire des dégâts.
     * @param [string] La cible de l'attaque 
     * @return void
     */
    public function attaquer($cible){
        $rand = rand($this->__getStrengthMin(), $this->__getStrengthMax());
        if ($cible->__getType() == $this->bonus) {
           $cible->life -= ($rand * 1.5);
            echo ($rand * 1.5);
            echo " " . $cible->life;
        }else{
            $cible->life -= $rand ;
            echo $rand;
            echo " " . $cible->life;
        }       
    }
}