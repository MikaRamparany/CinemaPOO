<?php

class casting {
    private Film $_Film;
    private Role $_Role;
    private Acteur $_Acteur;

    public function __construct ($_Film, $_Role, $_Acteur) 
    
    {

    $this -> _Film = $_Film;
    $this -> _Role = $_Role;
    $this -> _Acteur = $_Acteur;
    $this->_Acteur -> AjouterCastingActeur($this);
    $this -> _Role -> AjouterCasting($this);
    $this -> _Film -> AjouterFilm($this);

    }

    // GETTERS AND SETTERS 

    public function get_Film()
    {
        return $this -> _Film;
    }
    
    public function set_Film($_Film)
    {
    $this -> _Film = $_Film;
   
    }
    public function get_Role()
    {
        return $this -> _Role;
    }
    
    public function set_Role($_Role)
    {
    $this -> _Role= $_Role;
   
    }
    public function get_Acteur()
    {
        return $this -> _Acteur;
    }
    
    public function set_Acteur($_Acteur)
    {
    $this -> _Acteur= $_Acteur;
   
    }

    public function __toString()
    {
        return "$this->_Acteur  a incarné  $this->_Role";
    }

}   