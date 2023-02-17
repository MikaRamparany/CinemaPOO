<?php 

//! Class enfant de PersonneMere.php

class Acteur extends PersonneMere 
    {

        private  $_Casting;

    public function __construct(string $_Nom, string $_Prenom, string $_Sexe, $_DateNaissance)
    {
        parent::__construct($_Nom,  $_Prenom,  $_Sexe, $_DateNaissance);
        $this->_Casting = [];
    }

    function get_Casting()
    {
    return $this-> _Casting;
    }

    function set_Casting ($_Casting)
    {
    $this-> _Casting=$_Casting;
    return $this;
    }
// Fonction AjouterCastingActeur avant  tableau


    public function AjouterCastingActeur(Casting $Casting)
    {
    $this->_Casting[] = $Casting;
    }

    public function AfficherCastingActeur() // Afficher dans quel films a joué l'acteur.

    {
        $result = " Les films dans lesquel " . $this->get_Prenom() . "  " . $this->get_Nom() . " a joué sont : <br> <br>" . $this-> _Casting -> get_Film (); 

        foreach ($this->_Casting as $Casting) 
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