<?php

//! Class enfant de PersonneMere.php

class Realisateur extends PersonneMere
{

    private array $_AllFilm;


    public function __construct(string $_Nom, string $_Prenom, string $_Sexe, $_DateNaissance)
    {
        parent::__construct($_Nom,  $_Prenom,  $_Sexe, $_DateNaissance);
        $this->_AllFilm = [];
    }
}
