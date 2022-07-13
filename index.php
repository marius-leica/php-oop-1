<?php
class Movie
{
    //dichiarate delle variabili d’istanza
    public $title;
    public $year;
    //definire un costruttore
    public function __construct($title, $year)
    {
        $this->title = $title;
        $this->year = $year;
    }
    //definire un metodo
    public function getTitle()
    {
        return $this->title;
    }
    public function getYear()
    {
        return $this->year;
    }
}

//istanziati due oggetti ‘Movie’
$movie1 = new Movie('The Shawshank Redemption', 1994);
$movie2 = new Movie('The Godfather', 1972);

var_dump($movie1);
var_dump($movie2);
