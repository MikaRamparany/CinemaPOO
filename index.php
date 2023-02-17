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
$G3 = new Genre ("Thriller");

//CASTINGS 
// $CastFilm1 = New Casting ();
// $CAFILM1 = new Casting()


//FILMS 
$FILM1=new Film ("Dune","06-02-1985", "137min", $Rea1, $G1 );
$FILM2 =new Film ("Elephant Man", "08-04-1980", "124min" , $Rea1, $G1);
$FILM3 = new Film ("Fast and Furious 4", "04-05-2009", "100min", $Rea3, $G2);
$FILM4 = new Film ( "Fast and Furious 5", "29-04-2011", "130min", $Rea3, $G2);
$FILM5 = new Film ( " Fast and Furious 6", "22-05-2013", " 130min", $Rea3, $G2);
$FILM6 = new Film ( "Inception", "21-07-2010", "148min", $Rea2, $G3);
$FILM7 = new Film ( "Transcendance", "25-06-2014" ,"120min",$Rea2, $G3);
$FILM8 = new Film ( "Memento", "07-09-2000", "113min", $Rea2, $G3);
//--------------------------------------

// ROLES FILM 

$ROLFILM1 = new Role ("Paul Atréides"); // Nb: joué par Kyle MacLahchlan
$ROLFILM1 = new Role ("Dr Kynes"); // Nb: joué par Max von Sydow

$ROLFILM3 = new Role ("Domnique"); // Nb: joué par Vin Diesel 
$ROLFILM3 = new Role ("Officier Brian"); // Nb: joué par Paul Walker 
$ROLFILM4 = new Role ("Domnique"); // Nb: joué par Vin Diesel 
$ROLFILM4 = new Role ("Officier Brian"); // Nb: joué par Paul Walker 
$ROLFILM5 = new Role ("Domnique"); // Nb: joué par Vin Diesel 
$ROLFILM5 = new Role ("Officier Brian"); // Nb: joué par Paul Walker 

$ROLFILM6 = new Role ("Dom Cobb"); // Nb: Di Caprio
$ROLFILM6 = new Role ("Rob Fischer"); // Nb:Cillian Murphy


// ACTEURS 

$VD = new Acteur( "Vin", "Diesel", "Homme", "18-07-1967");
$PW = new Acteur( "Walker", "Paul", "Homme", "30-11-1977"); 

$LD = new Acteur("Di Caprio", "Leonardo", "Homme", "11-11-1974");
$CM = new Acteur("Murphy", "Cillian", "Homme", "24-05-1976");

$KM = new Acteur(" Mc Lahchlan", "Kyme", "Homme", "22-02-1959");
$MS = new Acteur("Sydow", "Max", "Homme", "08-03-2020");

// TESTS : 


$FILM1-> afficherInfoFilm(); // infos sur le film  

$FILM8-> afficherInfoFilm();

echo  $Rea3 -> afficherFilmRea(); // Afficher les films du réalisateur 
echo  $Rea2 -> afficherFilmRea();


echo $G2 -> afficherFilmparGenre();  // Afficher lees films par genre

echo $G3 -> afficherFilmparGenre(); 