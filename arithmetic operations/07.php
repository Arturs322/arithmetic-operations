<?php

//Modify the example program to compute the position of an object after falling for 10 seconds,
// outputting the position in meters.


/*function modify(int $z)
{
    $a = -9.81;
    $t = 10;
    $v = 0;
    $xi = 0;
    $x = 0.5 * (($a * $t) * ($a * $t) + $z * $v + $xi);
    {

        return round($x /-10) -9.5 . "m" . PHP_EOL;

    }
var_dump(modify(2));
    echo $x;

} */

$a = -9.81;
$t = 10;
$v = 0;
$x = 0;
$z = 0.5 * (($a * $t) * ($a * $t) + ($v * $t) + $x);
echo round($z /-10) -9.5 . "m" . PHP_EOL;
