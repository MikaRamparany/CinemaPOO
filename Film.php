<?php 

class Film {

    private string $_TitreFilm;
    private DateTime $_DateSortie;
    private Int $_DureeFilm; 
    private $_Casting;
    private  $_Realisateur; 
    private  $_Genre; 
    
  



public function __construct (string $_TitreFilm,DateTime $_DateSortie, Int $_DureeFilm, $_Casting, Realisateur $_Realisateur,  $_Genre )
    {
        $this -> _TitreFilm=$_TitreFilm;
        $this -> _DateSortie = $_DateSortie;
        $this -> _DureeFilm = $_DureeFilm;  
        $this-> _Casting = $_Casting;
        $this -> _Realisateur=$_Realisateur;
        $this ->_Genre=$_Genre;

    }

    //GETTERS

    public function get_TitreFilm ()
    
    {
    return $this -> _TitreFilm;        
    }

    public function get_DateSortie ()
    
    {
    return $this ->_DateSortie;        
    }

    public function get_DureeFilm ()
    
    {
    return $this -> _DureeFilm;        
    }

    public function get_Casting ()
    
    {
    return $this -> _Casting;        
    }

    public function get_Realisateur ()
    
    {
    return $this -> _Realisateur;        
    }
    public function get_Genre ()
    
    {
    return $this -> _Genre;        
    }
    
    //SETTERS

    public function set_TitreFilm ($_TitreFilm)
    
    {
     $this -> _TitreFilm=$_TitreFilm;        
    }

    public function set_DateSortie ($DateSortie)
    
    {
     $this ->_DateSortie=$DateSortie;        
    }

    public function set__DureeFilm ($DureeFilm)
    
    {
     $this -> _DureeFilm= $DureeFilm; 
    
    }

    public function set_Casting ($_Casting)
    
    {
     $this -> _Casting=$_Casting;        
    }

     public function set_Realisateur ($_Realisateur)
    
    {
     $this -> _Realisateur= $_Realisateur;        
    }
    
    public function set_Genre ($_Genre)
    
    {
    $this -> _Genre=$_Genre;        
    }

    //FONCTIONS 

  
public function AfficherInfoFilm()
    {
        
    }


}