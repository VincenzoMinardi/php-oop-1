<?php
class type
{
    public $genres;
    public $director;

    public function __construct($genres, $director)
    {
        $this->genres = $genres;
        $this->director = $director;
    }
}


$harry = new type();
$harry->genres = "finction";
$harry->director = "David Yates";


$fast = new type();
$fast->genres = "action";
$fast->director = "Louis Leterrier";




$iron = new type();
$iron->genres = "Iron Man";
$iron->director =  "Jon Favreau";
