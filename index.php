<?php
class movies
{
    // VARIABILI
    public $name;
    public $production;
    public $genres;
    public $director;

    // CONSTRUCT
    public function __construct($name, $production, $genres, $director)
    {
        $this->name = $name;
        $this->production = $production;
        $this->genres = $genres;
        $this->director = $director;
    }
}

// lE INSTANZE
$harry = new movies("Harry Potter", "2001", "Adventure", "Alfonso Cuaron");

echo 'Nome film' . ' : ' .  $harry->name;
echo '<br>';
echo 'Produzione' . ' : '  . $harry->production;
echo '<br>';
echo 'Genere' . ' : '  . $harry->genres;
echo '<br>';
echo 'Regista' . ' : '  . $harry->director;
echo '<br>';

echo '<br>';


$fast = new movies("Fast & Furious", "2001", "Action", "Louis Leterrier");

echo 'Nome Film' . ' : ' .  $fast->name;
echo '<br>';
echo 'Produzione' . ' : '  . $fast->production;
echo '<br>';
echo 'Genere' . ' : '  . $fast->genres;
echo '<br>';
echo 'Regista' . ' : '  . $fast->director;
echo '<br>';

echo '<br>';
$iron = new movies("Iron Man", "2008", "Action", "Jon Favreau");

echo 'Nome Film' . ' : ' .  $iron->name;
echo '<br>';
echo 'Produzione' . ' : '  . $iron->production;
echo '<br>';
echo 'Genere' . ' : '  . $iron->genres;
echo '<br>';
echo 'Regista' . ' : '  . $iron->director;
echo '<br>';
