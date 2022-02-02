<?php

// Create a variable $plateNumber that stores your car plate number.
// Create a switch statement that prints out that its your car in case of your number.

$plateNumber = 'GB12';

switch ($plateNumber) {
    case 'GB13':
            echo "This is not my car" . PHP_EOL;
        break;
    case 'GB12':
        echo 'This is my car' . PHP_EOL;
        break;
}
