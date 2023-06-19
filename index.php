<?php
class movies
{
    public $name;
    public $production;
}

$harry = new movies();
$harry->name = "Harry Potter";
$harry->production = "2001";

var_dump($harry);

$fast = new movies();
$fast->name = "Fast & Furious";
$fast->production = "2001";

var_dump($fast);

$iron = new movies();
$iron->name = "Iron Man";
$iron->production = "2008";

var_dump($iron);
