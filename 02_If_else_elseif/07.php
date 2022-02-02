<?php

// Create a variable $number with integer by your choice.
// Create a switch statement that prints out text "low" if the value is under 50, "medium"
// if the case is higher than 50 but lower than 100, "high" if the value is >100.

$number = 80;

switch ($number) {
    case $number < 50:
        echo 'low' . PHP_EOL;
        break;
    case $number > 50 && $number < 100:
        echo 'medium' . PHP_EOL;
        break;
    case $number > 100:
        echo 'high' . PHP_EOL;
        break;
}