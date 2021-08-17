<?php

$sum = 110;
$number = 1;
while ($number <= 110)
    for ($number = 1; $number <= 110; $number++) {
        if ($number % 3 == 0) {
            echo "Coza" . PHP_EOL;
        } elseif ($number % 5 == 0) {
            echo "Loza" . PHP_EOL;
        }elseif ($number % 7 == 0)
        {
            echo "Woza" . PHP_EOL;
        }else
        {
            echo $number . PHP_EOL;
        }


}
