<?php

require_once __DIR__ . "/Genre.php";
class Movie {
    //dichiarazione attributi
    public $title;
    public $ogLanguage;
    public $release;
    public $runningTime;
    public $genre;


    //Costruttore
    function __construct($_title, $_ogLanguage, Genre $_genre, $_runningTime) 
    {
        $this->title = $_title;
        $this->ogLanguage = $_ogLanguage;
        $this->genre = $_genre;
        $this->runningTime = $_runningTime;
    }

    // Metodo
    public function printFilmInfo() 
    {
        return "Titolo: {$this->title}, Durata: {$this->runningTime}, Genere: {$this->genre->name}.";
    }
}