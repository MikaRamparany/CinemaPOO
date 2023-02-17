<?php 

//! Class enfant de PersonneMere.php

class Acteur extends PersonneMere 
    {

        private  array $_Castings;

    public function __construct(string $_Nom, string $_Prenom, string $_Sexe, $_DateNaissance)
    {
        parent::__construct($_Nom,  $_Prenom,  $_Sexe, $_DateNaissance);
        $this->_Castings = [];
    }

    function get_Castings()
    {
    return $this-> _Castings;
    }

    function set_Castings ($_Castings)
    {
    $this-> _Castings=$_Castings;
    return $this;
    }
// Fonction AjouterCastingActeur avant  tableau


    public function AjouterCastingActeur(Casting $Casting)
    {
    $this->_Castings[] = $Casting;
    }

    public function AfficherCastingActeur() // Afficher dans quel films a joué l'acteur.

    {
        $result = " Les films dans lesquel " . $this->get_Prenom() . "  " . $this->get_Nom() . " a joué sont : <br> <br>" ;

        foreach ($this->_Castings as $Casting) 
        {
            $result .=  $Casting. "<br>" ;
         }
         return $result;
    }

    public function __toString()
    {
        $result = " Titre : ";
        return $result;
    }

 }