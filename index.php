<?php
include __DIR__ . '/genres.php';
class movies
{
    public $name;
    public $production;
    public $genres;
    public $director;

    public function __construct($name, $production, $genres, $director)
    {
        $this->name = $name;
        $this->production = $production;
        $this->genres = $genres;
        $this->director = $director;
    }
}

$harry = new movies("Harry Potter", "2001", "Adventure", "Alfonso Cuaron");

echo 'nome film' . ' : ' .  $harry->name;
echo '<br>';
echo 'produzione' . ' : '  . $harry->production;
echo '<br>';
echo 'Genere' . ' : '  . $harry->genres;
echo '<br>';
echo 'Regista' . ' : '  . $harry->director;
echo '<br>';
$fast = new movies("Fast & Furious", "2001", "Action", "Louis Leterrier");

echo 'nome film' . ' : ' .  $fast->name;
echo '<br>';
echo 'produzione' . ' : '  . $fast->production;
echo '<br>';
echo 'Genere' . ' : '  . $fast->genres;
echo '<br>';
echo 'Regista' . ' : '  . $fast->director;
echo '<br>';

$iron = new movies("Iron Man", "2008", "Action", "Jon Favreau");

echo 'nome film' . ' : ' .  $iron->name;
echo '<br>';
echo 'produzione' . ' : '  . $iron->production;
echo '<br>';
echo 'Genere' . ' : '  . $iron->genres;
echo '<br>';
echo 'Regista' . ' : '  . $iron->director;
echo '<br>';
