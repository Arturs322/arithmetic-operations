<?php

function CheckOddEven($z)
{
    switch ($z) {
        case $z % 2 == 1:
            echo "Odd number" . PHP_EOL;
            echo "bye!" . PHP_EOL;
            break;
        case $z % 2 == 0:
            echo "Even number" . PHP_EOL;
            echo "bye!" . PHP_EOL;
            break;

        default:
            echo "bye!";
            break;
    }

}
echo CheckOddEven(3);