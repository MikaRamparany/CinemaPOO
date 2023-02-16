<?php 

class Film {

    private string $_TitreFilm;
    private DateTime $_DateSortie;
    private Int $DureeFilm; 

public function __construct (string $_TitreFilm,DateTime $_DateSortie, Int $DureeFilm, Realisateur $_Realisateur, Acteur $Acteur, Genre $Genre )
    {
        $this -> _TitreFilm=$_TitreFilm;
        $this -> _DateSortie = $_DateSortie;
        $this -> DureeFilm = $DureeFilm; 
        

    }


}