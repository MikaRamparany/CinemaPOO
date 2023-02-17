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

//! section à compléyer après avoir fait la classe casting 


    public function __toString()
    {
        return $this -> _Role;
    }
}