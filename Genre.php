<?php 

class Genre {

    private string $_NomGenre;
    private array $_ListeGenre;

    public function __construct( string $_NomGenre)
    {
        $this-> _NomGenre =$_NomGenre;
        $this->_ListeGenre = [];
    } 

    //GETTER 

    public function get_NomGenre ()
    {
        return  $this -> _NomGenre;
    }
    function get_ListeGenres ()
    {
    return $this-> _ListeGenre;
    }

    //SETTER

    public function set_NomGenre ($_NomGenre)
    {
       $this -> _NomGenre=$_NomGenre;
    }
    function set_ListeGenre ($_ListeGenres)
    {
    $this-> _ListeGenre=$_ListeGenres;
    return $this;
    }

    public function AddgGenreFilm($GenreFilm)
        {
        $this->_ListeGenre[] = $GenreFilm;
        }

        public function afficherFilmGenre()
        {
            $result = " GENRE  " .$this->_NomGenre.  " : <br>";
            foreach($this->_ListeGenre as $GenreFilm)
            {
                $result .= $GenreFilm;
            }

            return $result;

        }
}



