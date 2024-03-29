<?php 

class Film {

    private string $_TitreFilm;
    private  $_DateSortie;
    private  $_DureeFilm; 
    private array $_Casting;
    private   $_Realisateur; 
    private  $_Genre; 
    
  



public function __construct (string $_TitreFilm, $_DateSortie,  $_DureeFilm,  Realisateur $_Realisateur,  $_Genre )
    {
        $this -> _TitreFilm=$_TitreFilm;
        $this -> _DateSortie = $_DateSortie;
        $this -> _DureeFilm = $_DureeFilm;  
        $this-> _Casting = [];
        $this -> _Realisateur=$_Realisateur;
        $this -> _Genre = $_Genre;
        $this ->_Genre-> AddFilms ($this);
        $this->_Realisateur->addFilm($this);

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


    public function AjouterFilm(Casting $Casting)
    {
    $this->_Casting[] = $Casting;
    }
  
public function AfficherInfoFilm()
    {
        echo "<br> <br>Informations du film " 
        .$this -> _TitreFilm. "<br> <br>Sortie : " 
        .$this -> _DateSortie. "<br> Durée : " .$this -> _DureeFilm. "<br> Réalisateur : "
        .$this->_Realisateur -> get_Nom(). " " .$this->_Realisateur  -> get_Prenom(). "<br> Genre : " . $this->_Genre -> get_NomGenre() ;

    }


public function __toString()
    {
        $result = $this->get_TitreFilm() . " sorti le " . $this->get_DateSortie();
        return $result;
    }
}