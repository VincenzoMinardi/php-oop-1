<?php
include __DIR__ . '/genres.php';
class movies
{
    public $name;
    public $production;
    public $type;
}

$harry = new movies();
$harry->name = "Harry Potter";
$harry->production = "2001";


echo 'nome film' . ' : ' . $harry->name;
echo '<br>';
echo 'produzione' . ' : ' .  $harry->production;
echo '<br>';

$fast = new movies();
$fast->name = "Fast & Furious";
$fast->production = "2001";


echo 'nome film' . ' : ' . $fast->name;
echo '<br>';
echo 'produzione' . ' : ' . $fast->production;
echo '<br>';

$iron = new movies();
$iron->name = "Iron Man";
$iron->production =  "2008";


echo 'nome film' . ' : ' .  $iron->name;
echo '<br>';
echo 'produzione' . ' : '  . $iron->production;
echo '<br>';
