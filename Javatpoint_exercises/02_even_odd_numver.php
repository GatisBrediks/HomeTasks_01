<?php

// Even or odd number
//Input: 23
////Output: odd number
//
//Input: 12
////Output: even number

$number = (int) readline("Type a number: ");

if ($number % 2 == 0) {
    echo "even number" . PHP_EOL;
} else {
    echo "odd number" . PHP_EOL;
}