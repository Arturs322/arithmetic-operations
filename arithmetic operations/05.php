<?php

$random = rand(1, 100);

while (true) {
    $random = (int) readline('Im thinking of a number between 1-100.  Try to guess it.
    ');

    switch ($random) {
        case $random >= rand(1, 100);
            echo "Sorry, you are too high   I was thinking of" . " " . rand(1, 100) . "." . PHP_EOL;
            break;
        case $random <= rand(1, 100);
            echo "Sorry, you are too low.  I was thinking of" . " " . rand(1, 100) . "." . PHP_EOL;
            break;
        case $random == rand(1, 100);
            echo "You guessed it.   I was thinking of" . " " . rand(1, 100) . "." . PHP_EOL;
            break;

    }
}