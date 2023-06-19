<?php
class movies
{
    // VARIABILI
    public $name;
    public $production;
    public $genres;
    public $director;
    public  $minAge;

    // METHODS
    public function verifyAge($age)
    {
        if ($age < $this->minAge) {
            echo 'Età minima:' . ' . ' . $this->minAge;
        }
    }
    // CONSTRUCT
    public function __construct($name, $production, $genres, $director, $minAge)
    {
        $this->name = $name;
        $this->production = $production;
        $this->genres = $genres;
        $this->director = $director;
        $this->minAge = $minAge;
    }
}

// lE INSTANZE
$harry = new movies("Harry Potter", "2001", "Adventure", "Alfonso Cuaron", 0);

echo 'Nome film' . ' : ' .  $harry->name;
echo '<br>';
echo 'Produzione' . ' : '  . $harry->production;
echo '<br>';
echo 'Genere' . ' : '  . $harry->genres;
echo '<br>';
echo 'Regista' . ' : '  . $harry->director;
echo '<br>';

echo '<br>';
$harry->verifyAge(15);


$fast = new movies("Fast & Furious", "2001", "Action", "Louis Leterrier", 18);

echo 'Nome Film' . ' : ' .  $fast->name;
echo '<br>';
echo 'Produzione' . ' : '  . $fast->production;
echo '<br>';
echo 'Genere' . ' : '  . $fast->genres;
echo '<br>';
echo 'Regista' . ' : '  . $fast->director;
echo '<br>';
$fast->verifyAge(15);

echo '<br>';
$iron = new movies("Iron Man", "2008", "Action", "Jon Favreau", 13);

echo 'Nome Film' . ' : ' .  $iron->name;
echo '<br>';
echo 'Produzione' . ' : '  . $iron->production;
echo '<br>';
echo 'Genere' . ' : '  . $iron->genres;
echo '<br>';
echo 'Regista' . ' : '  . $iron->director;
echo '<br>';
$iron->verifyAge(15);
