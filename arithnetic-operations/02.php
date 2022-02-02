<?php

// Write a program called CheckOddEven which prints "Odd Number" if the int variable “number” is odd,
// or “Even Number” otherwise. The program shall always print “bye!” before exiting.

$number = 5;

if ($number % 2 != 0) {
    echo 'Odd number' . PHP_EOL;
} else {
    echo 'Even number' . PHP_EOL;
}

echo 'bye!' . PHP_EOL;