<?php

$arturs = new stdClass();
$arturs->name = "Arturs";
$arturs->weight = 48;
$arturs->height = 1.96218;

$janis = new stdClass();
$janis->name = "Janis";
$janis->weight = 50;
$janis->height = 1.52392;

$juris = new stdClass();
$juris->name = "Juris";
$juris->weight = 32;
$juris->height = 1.79832;

$persons = [$arturs, $janis, $juris];

foreach ($persons as $person)
{
    $personBMI = $person->weight  / $person->height . PHP_EOL;

    if ($personBMI <= 18.5)
    {
        echo $person->name . " " . "is underweight because his BMI is" . " " . $personBMI . PHP_EOL;
    } elseif ($personBMI > 25)
    {
        echo $person->name . " " . "is overweight because his BMI is" . " "  . $personBMI . PHP_EOL;
    } elseif ($personBMI >= 18.5)
    {
        echo $person->name . " " . "has optimal weight because his BMI is" . " "  . $personBMI . PHP_EOL;
    }
}