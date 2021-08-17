<?php

$arturs = new stdClass();
$arturs->name = "Arturs";
$arturs->hours = 73;
$arturs->basepay = 10.00;

$janis = new stdClass();
$janis->name = "Janis";
$janis->hours = 47;
$janis->basepay = 8.20;

$juris = new stdClass();
$juris->name = "Juris";
$juris->hours = 35;
$juris->basepay = 7.50;

$persons = [$arturs, $janis, $juris];
$basepay = 8.00;


foreach ($persons as $person)
{
    echo $person->name . " " . $person->basepay * $person->hours . PHP_EOL;

    $overtime = $person->basepay * 1.5;
    if ($person->hours > 40)
    {
        echo $person->name . " " . "has" . " " . $overtime . "$ for overtime." . PHP_EOL;
    }else if ($person->basepay = $basepay)
    {
        echo $person->name . " " . "has less basepay than 8.00/hour. - ERROR" . PHP_EOL;
    }else if ($person->hours > 60)
    {
        echo $person->name . "" . " has more than 60 hours. - ERROR" . PHP_EOL;
    }else if ($person->hours < 40)
{
        echo 'ERROOOOOOOOOOOOR' . PHP_EOL;
    }
}
var_dump($persons);

/*while ($person)
{
    case $person->hours > 40:
        echo $person->name . " " . "has" . " " . $overtime . "$ for overtime." . PHP_EOL;
        break;
    case $person->basepay = 8.00:
        echo $person->name . " " . "has less basepay than 8.00/hour. - ERROR" . PHP_EOL;
        break;
    case $person->hours > 60:
            echo $person->name . "" . " has more than 60 hours. - ERROR" . PHP_EOL;
            break;
    case $person->hours < 40:
        echo 'ERROOOOOOOOOOOOR' . PHP_EOL;
break;
} */
