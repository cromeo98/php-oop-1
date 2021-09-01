<!-- create un file index.php in cui:
è definita una classe ‘Movie’ => 
all'interno della classe sono dichiarate delle variabili d'istanza => 
all'interno della classe è definito un costruttore => 
all'interno della classe è definito almeno un metodo -->
<!-- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php

class Movie{
    public $title;
    public $year;
    public $avgVote;
    public $mainCharacter;

    function __construct($_title, $_year){
        $this->title = $_title;
        $this->year = $_year;
    }

    public function getAvgVote(){
        $vote = [];
        while(count($vote) < 11){
            array_push($vote, rand(0,10));
        }
        return array_sum($vote)/count($vote);
    }

    public function __toString(){
     return $this->Name . ' '. $this->Number;
    }
}

$firstMovie = new Movie('Inglourious Basterds', 2009);
$firstMovie->mainCharacter = 'Brad Pitt';
$avgVote = $firstMovie->getAvgVote();
$firstMovie->avgVote = $avgVote;

var_dump($firstMovie);

$secondMovie = new Movie('JoJo Rabbit', 2019);
$secondMovie->mainCharacter = 'Roman Griffin Davis';
$avgVote = $secondMovie->getAvgVote();
$secondMovie->avgVote = $avgVote;

var_dump($secondMovie);

echo $firstMovie;

?>