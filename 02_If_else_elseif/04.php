<?php

// By your choice, create condition with 3 checks.
// For example, if value is greater than X, less than Y and is an even number.

$variable1 = 50;
$variable2 = 100;

if ($variable1 > $variable2) {
    echo 'variable2 is greater than variable1' . PHP_EOL;
} elseif ($variable1 and $variable2 >= 0) {
    echo 'both are positive numbers' . PHP_EOL;
} elseif ($variable2 % 2 == 0) {
    echo 'variabe2 is integer' . PHP_EOL;
}
