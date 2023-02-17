<?php

//! Class enfant de PersonneMere.php

class Realisateur extends PersonneMere
{

    private array $_AllFilms=[];


    public function __construct(string $_Nom, string $_Prenom, string $_Sexe, $_DateNaissance)
    {
        parent::__construct($_Nom,  $_Prenom,  $_Sexe, $_DateNaissance);
        $this->_AllFilms = [];
    }

    function get_AllFilms ()
    {
    return $this-> _AllFilms;
    }

    function set_AllFilms ($_AllFilms)
    {
    $this-> _AllFilms=$_AllFilms;
    return $this;
    }
// créer une fonction qui ajoute les films du réalisateur 

    public function AddFilm($Film){
    $this->_AllFilms[] = $Film;
    }

    public function afficherFilmRea()
    {
        $result = " <br> <br> Les films réalisés par ". $this ." : <br>";
        foreach($this->_AllFilms as $Film)
        {
           $result .=  $Film. "<br>" ;
        }
        return $result;
    }
    public function __toString()
    {
        $result = $this->get_Prenom() . "  " . $this->get_Nom();
        return $result;
    }
    

}
