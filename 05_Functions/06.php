<?php

// Create an non-associative array with 5 elements where 3 are integers, 1 float and 1 string.
// Create a for loop that iterates non-associative array using php in-built function that determines count of elements in the array.
// Create a function that doubles the integer number.
// Within the loop using php in-built function print out the double of the number value (using your custom function).

function doubleNumbers($i)
{
    if (is_int($i)) {
        return $i * 2;
    } else {
        return $i;
    }
}

$elements = [2, 5, 9, 1.5, "BMW"];

for ($i = 0; $i < count($elements); $i++) {
    echo doubleNumbers($elements[$i]) . PHP_EOL;
}

