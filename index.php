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
$Rea2 = new Realisateur ("Christopher", "Nolan", "Homme","30-07-1970");
$Rea3= new Realisateur ("Justin"," Lin", "Homme", "11-10-1971");

//GENRES 

$G1 = new Genre ("Science-Fiction");
$G2 = new Genre ("Action");
$G3 = new Genre ("Policier");

//CASTINGS 
// $CastFilm1 = New Casting ();
// $CAFILM1 = new Casting()


//FILMS 
$FILM1=new Film ("Dune","06-02-1985", "137min", $Rea1, $G1 );
$FILM2 =new Film ("Elephant Man", "08-04-1980", "124min" , $Rea1, $G1);
$FILM3 = new Film ("Fast and Furious 4", "04-05-2009", "100min", $Rea3, $G2);
$FILM4 = new Film ( "Fast and Furious 5", "29-04-2011", "130min", $Rea3, $G2);


//--------------------------------------

// TESTS : 


$FILM1-> afficherInfoFilm(); // infos sur le film  

echo  $Rea3 -> afficherFilmRea(); // afficher les films du réalisateur 

echo $G2 -> afficherFilmparGenre();  // Afficher le genre du film