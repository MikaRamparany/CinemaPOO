<?php

spl_autoload_register(function ($class_name) 
{
    require_once $class_name . '.php';
});

// Demande :
//AfficherinfoFilm (titre, durée etc..)
// Réalisteur (Nom, prénom, etc..)
// Genre( )




//REALISATEURS

$Rea1 = new Realisateur (" David"," Lynch", "Homme", "20-01-1946");

//GENRES 

$G1 = new Genre ("Science-Fiction");
$G2 = new Genre ("Action");

//CASTINGS 
// $CastFilm1 = New Casting ();
// $CAFILM1 = new Casting()


//FILMS 
$FILM1=new Film ("Dune","06-02-1985", "137min", $Rea1, $G1 );
$FILM2 =new Film ("Elephant Man", "08-04-1980", "124min" , $Rea1, $G1);



//--------------------------------------

// TESTS : 


$FILM1-> afficherInfoFilm();