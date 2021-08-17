<?php
//Write a program to compute the product of integers from 1 to 10 (i.e., 1×2×3×...×10), as an int.
// Take note that it is the same as factorial of N.

function getInt($z)
{
    if ($z == 0)
        return 1;
    return $z * getInt($z - 1);
}


$number = 10;
echo "Product compute is"  . " "  . getInt($number) . "." . PHP_EOL;





