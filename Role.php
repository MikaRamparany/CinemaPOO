<?php 

//! Il faudra lier une fonction tableau entre les classes role et casting 


class Role {
        private string $_Role;
        private array $_Casting; 


        public function __construct( $_Role)
        {
        $this -> _Role = $_Role;
        $this -> _Casting =[]; //! A compléter après avoir fait la feuille de classe Casting

        }


// GETTERS AND SETTERS 

        public function get_Role()
            {
        return $this-> _Role;
            
            }

        public function set_Role($_Role)
        {
            $this -> _Role = $_Role;
        }


    // Fonctions Ajouter Casting avant "boucle tableau"

    public function AjouterCasting(Casting $Casting){
        $this->_Casting[] = $Casting;
    }

    public function AfficherCasting() 
    {

    foreach ($this->_Casting as $Casting) 
    
        echo  " Distribution des rôles dans le film ".$Casting->get_Film(). "<br" . $Casting->get_Acteur(). " : " . $Casting -> get_Acteur() ."<br>";
    }



    public function __toString()
    {
        return $this -> _Role;
    }
}