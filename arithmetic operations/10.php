<?php

$circle = M_PI * 10 * 2;
$rectangle = 12 * 20;
$triangle = 15 * 7 * 0.5;

$areas = [$circle, $rectangle, $triangle];

echo "Geometry calculator:" . PHP_EOL,
  ""  . PHP_EOL,
    "Calculate the Area of a Circle" . PHP_EOL,
"Calculate the Area of a Rectangle" . PHP_EOL,
"Calculate the Area of a Triangle" . PHP_EOL,
"Quit" . PHP_EOL;

while (true) {
    $areas = (int) readline("Enter your choice (1-4):") . PHP_EOL;

    switch ($areas) {
        case 1:
            echo "The area of a Circle is" . " " . $circle . PHP_EOL;
            break;
        case 2:
            echo "The area of a Rectangle is" . " " . $rectangle . PHP_EOL;
            break;
        case 3:
            echo "The area of a Triangle is" . " " . $triangle . PHP_EOL;
            break;
        case 4:
            echo "Quit" . PHP_EOL;
            exit;
        default:
            echo "ERROR" . PHP_EOL;
            break;
    }
}

