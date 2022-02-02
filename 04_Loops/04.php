<?php

// Create a non associative array with integers and print out only integers that divides by 3 without any left.

$integers = [
    3,
    5,
    9,
    13,
    15,
    20,
    27,
    30
];
for ($i = 0; $i < count($integers); $i++) {
    if ($integers[$i] % 3 == 0) {
        echo $integers[$i] . PHP_EOL;
    }
}
