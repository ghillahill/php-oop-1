<?php

    //code
    /*
    è definita una classe ‘Movie’
        => all'interno della classe sono dichiarate delle variabili d'istanza
        => all'interno della classe è definito un costruttore
        => all'interno della classe è definito almeno un metodo

    Vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
    */

    class Movie {

        public $title;
        public $language;
        public $year;

        function __construct($_title, $_language, $_year){
            $this->title = $_title;
            $this->language = $_language;
            $this->year = $_year;
        }

        public function getTitle() {
            return $this->title;
        }

        public function getLanguage() {
            return $this->language;
        }

        public function getYear() {
            return $this->year;
        }

    }

    $movie_one = new Movie('Star Wars (Episode IV)', 'english', 1977);

    echo '<p> Titolo Movie One: ' . $movie_one->getTitle() . '</p>';
    echo '<p> Titolo Movie One: ' . $movie_one->getLanguage() . '</p>';
    echo '<p> Titolo Movie One: ' . $movie_one->getYear() . '</p>';

    echo '<br>';

    $movie_two = new Movie('Star Wars (Episode V)', 'english', 1980);

    echo '<p> Titolo Movie One: ' . $movie_two->getTitle() . '</p>';
    echo '<p> Titolo Movie One: ' . $movie_two->getLanguage() . '</p>';
    echo '<p> Titolo Movie One: ' . $movie_two->getYear() . '</p>';

?>
