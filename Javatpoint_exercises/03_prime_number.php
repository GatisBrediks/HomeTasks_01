<?php

//Write a PHP program to check prime number.
//
//Input: 17
//Output: not prime number
//
//Input: 57
//Output: prime number

function isPriimeNumber(int $number): int {
    for ($i = 2; $i<$number; $i++) {
        if ($number % $i == 0) {
            return 0;
        }
    }
    return 1;
}

$givenNumber = isPriimeNumber(8);
if ($givenNumber == 0) {
    echo "not prime number" . PHP_EOL;
} else {
    echo "prime number" . PHP_EOL;
}


