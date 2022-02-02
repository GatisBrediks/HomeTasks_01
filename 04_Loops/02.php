<?php

// Create an array with integers (up to 10) and print them out using for loop.

$integers = [
    1,
    4,
    6,
    8,
    9
];
for ($i = 0; $i < count($integers); $i++) {
    echo $integers[$i] . PHP_EOL;
}
