<?php 

class Genre {

    private string $_NomGenre;
    private array $_Lesfilms;

    public function __construct( string $_NomGenre)
    {
        $this-> _NomGenre =$_NomGenre;
        $this->_Lesfilms = [];
        
    } 

    //GETTER 

    public function get_NomGenre ()
    {
        return  $this -> _NomGenre;
    }
    function get_Films ()
    {
    return $this-> _Lesfilms;
    }

    //SETTER

    public function set_NomGenre ($_NomGenre)
    {
       $this -> _NomGenre=$_NomGenre;
    }
    function set_ListeGenre ($_Lesfilms)
    {
    $this-> _Lesfilms=$_Lesfilms;
    return $this;
    }

    public function AddFilms($FilmparGenre)
        {
        $this->_Lesfilms[] = $FilmparGenre;
        }

        public function afficherFilmparGenre()
        {
            $result = " <br> <br> Voici les films du genre " .$this->_NomGenre.  " : <br>";
            foreach($this->_Lesfilms as $FilmparGenre)
            {
                $result .= " Le film " .$FilmparGenre. "<br>";
            }

            return $result;

        }
        public function __toString()
        {
            return $this->_NomGenre;
        }
}



