<?php

class PersonneMere {

    private string $_Nom;
    private string $_Prenom;
    private string $_Sexe;
    private DateTime $_DateNaissance; 



public function __construct (string $_Nom, string $_Prenom , string $_Sexe, $_DateNaissance) 
    
    {
        $this-> _Nom =$_Prenom;
        $this-> _Prenom =$_Nom;
        $this -> _Sexe = $_Sexe; 
        $this -> _DateNaissance = $_DateNaissance;

    }
// GETTERS 

public function get_Nom ()
    
    {
    return $this -> _Nom;        
    }

public function get_Prenom ()
    
    {
    return $this -> _Prenom;        
    }

 public function get_Sexe ()
    
    {
    return $this -> _Sexe;        
    }

    public function get_DateNaissance ()
    
    {
    return $this -> _DateNaissance;        
    }


//SETTERS 

public function set_Nom ($_Nom)
    
    {
    return $this -> _Nom=$_Nom;        
    }

public function set_Prenom ($_Prenom)
    
    {
    return $this -> _Prenom=$_Prenom;        
    }

 public function set_Sexe ($_Sexe)
    
    {
    return $this -> _Sexe=$_Sexe;        
    }

    public function set_DateNaissance ($_DateNaissance)
    
    {
    return $this -> _DateNaissance=$_DateNaissance;        
    }



}


