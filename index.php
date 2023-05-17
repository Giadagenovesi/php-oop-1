<!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
 - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php

require_once __DIR__ . "/Models/Movie.php";
require_once __DIR__ . "/Models/Genre.php";

$titanic = new Movie("Titanic","English", (new Genre ("Drama")),"195 minutes");

$the_big_lebowski = new Movie("The Big Lebowski", "English", (new Genre ("Comedy")), "117 minutes");

$miseria_nobilta = new Movie("Miseria e Nobiltà", "Italian", (new Genre ("Comedy")), "95 minutes");

// var_dump($titanic);
// var_dump($the_big_lebowski);
// var_dump($miseria_nobilta);


echo($titanic->printFilmInfo());
echo($the_big_lebowski->printFilmInfo());
echo($miseria_nobilta->printFilmInfo());