<?php

//Write a PHP program to print sum of digits.
//
//Input: 23
//
//Output: 5

$digits = (int) readline("Type: ");
$sum = 0;
$rem = 0;
for ($i = 0; $i <= strlen($digits); $i++) {
    $rem = $digits % 10;
    $sum += $rem;
    $digits /= 10;
}

echo "Sum of typed digits is " . $sum . PHP_EOL;

