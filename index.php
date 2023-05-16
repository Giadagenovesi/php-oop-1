<!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
 - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php

class Movie {
    //dichiarazione attributi
    public $title;
    public $ogLanguage;
    public $release;
    public $runningTime;
    public $genre;


    //Costruttore
    function __construct($_title, $_ogLanguage, $_genre, $_runningTime) {
        $this->title = $_title;
        $this->ogLanguage = $_ogLanguage;
        $this->genre = $_genre;
        $this->runningTime = $_runningTime;
    }

    // Metodo
    public function printFilmInfo() {
        return "Titolo: {$this->title}, Durata: {$this->runningTime}, Genere: {$this->genre}.";
    }
}

$titanic = new Movie("Titanic","English", "Drama","195 minutes");

$the_big_lebowski = new Movie("The Big Lebowski", "English", "Comedy", "117 minutes");

$miseria_nobilta = new Movie("Miseria e Nobiltà", "Italian", "Comedy", "95 minutes");

var_dump($titanic);
var_dump($the_big_lebowski);
var_dump($miseria_nobilta);


echo($titanic->printFilmInfo());
echo($the_big_lebowski->printFilmInfo());
echo($miseria_nobilta->printFilmInfo());