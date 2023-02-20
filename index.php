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
$Rea4 = new Realisateur ("David", "Twohy", "Homme", "18-10-1955");
//GENRES 

$G1 = new Genre ("Science-Fiction");
$G2 = new Genre ("Action");
$G3 = new Genre ("Thriller");




//FILMS 
$FILM1=new Film ("Dune","06-02-1985", "137min", $Rea1, $G1 );
$FILM2 =new Film ("Elephant Man", "08-04-1980", "124min" , $Rea1, $G1);
$FILM3 = new Film ("Fast and Furious 4", "04-05-2009", "100min", $Rea3, $G2);
$FILM4 = new Film ( "Fast and Furious 5", "29-04-2011", "130min", $Rea3, $G2);
$FILM5 = new Film ( " Fast and Furious 6", "22-05-2013", " 130min", $Rea3, $G2);
$FILM6 = new Film ( "Inception", "21-07-2010", "148min", $Rea2, $G3);
$FILM7 = new Film ( "Transcendance", "25-06-2014" ,"120min",$Rea2, $G3);
$FILM8 = new Film ( "Memento", "07-09-2000", "113min", $Rea2, $G3);
$FILM9 = new Film ( "Les Chroniques de Riddick", "11-06-2004", "199min", $Rea4, $G2);


//--------------------------------------

// ROLES FILM 

$ROLFILM1PA = new Role ("Paul Atréides"); // Nb: joué par Kyle MacLahchlan
$ROLFILM1DK = new Role ("Dr Kynes"); // Nb: joué par Max von Sydow

$ROLFILM3DT = new Role ("Dominique Toreto"); // Nb: joué par Vin Diesel 
$ROLFILM3OB = new Role ("Officier Brian"); // Nb: joué par Paul Walker 
$ROLFILM4DT = new Role ("Dominique Toreto"); // Nb: joué par Vin Diesel 
$ROLFILM4OB = new Role ("Officier Brian"); // Nb: joué par Paul Walker 
$ROLFILM5DT = new Role ("Dominique Toreto"); // Nb: joué par Vin Diesel 
$ROLFILM5OB = new Role ("Officier Brian"); // Nb: joué par Paul Walker 

$ROLFILM6DC = new Role ("Dom Cobb"); // Nb: Di Caprio
$ROLFILM6RF = new Role ("Rob Fischer"); // Nb:Cillian Murphy

$ROLFILM9RK = new Role ("Riddick"); // Nb: Jouée par Vin Diesel
// ACTEURS 

$VD = new Acteur( "Vin", "Diesel", "Homme", "18-07-1967");
$PW = new Acteur( "Walker", "Paul", "Homme", "30-11-1977"); 

$LD = new Acteur("Di Caprio", "Leonardo", "Homme", "11-11-1974");
$CM = new Acteur("Murphy", "Cillian", "Homme", "24-05-1976");

$KM = new Acteur(" Mc Lahchlan", "Kyle", "Homme", "22-02-1959");
$MS = new Acteur("Sydow", "Max", "Homme", "08-03-2020");

//CASTINGS 

$CFLM1KM = new Casting ($FILM1, $ROLFILM1PA,$KM );
$CFLM1MS = new Casting ($FILM1, $ROLFILM1DK,$MS );

$CFLM3DT = new Casting ($FILM3, $ROLFILM3DT, $VD);
$CFLM3OB = new Casting ($FILM3, $ROLFILM3OB, $PW);

$CFLM4DT = new Casting ($FILM4, $ROLFILM4DT, $VD);
$CFLM4OB = new Casting ($FILM4, $ROLFILM4OB, $PW);
$CFLM5DT = new Casting ($FILM5, $ROLFILM5DT, $VD);

$CFLM9RK = new Casting ($FILM9, $ROLFILM9RK, $VD);


// TESTS : 


$FILM1-> afficherInfoFilm(); // infos sur le film  

// $FILM8-> afficherInfoFilm();

echo  $Rea3 -> afficherFilmRea(); // Afficher les films du réalisateur 
// echo  $Rea2 -> afficherFilmRea();


echo $G2 -> afficherFilmparGenre();  // Afficher lees films par genre

// echo $G3 -> afficherFilmparGenre(); 
echo "<br> *********<br> <br>";


echo $VD -> AfficherCastingActeur(); // "L'acteur Dominique Toreto 
