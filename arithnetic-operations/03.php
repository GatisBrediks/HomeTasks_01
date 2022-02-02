<?php

# Write a program to produce the sum of 1, 2, 3, ..., to 100.
# Store 1 and 100 in variables lower bound and upper bound, so that we can change their values easily.
# Also compute and display the average. The output shall look like:

//The sum of 1 to 100 is 5050
//The average is 50.5

$minimalNumber = 1;
$maximalNumber = 100;
$numbers = range($minimalNumber, $maximalNumber);
$sumOfNumbers = array_sum($numbers);
$averageOfNumbers = $sumOfNumbers / count($numbers);

echo "The sum of {$minimalNumber} to {$maximalNumber} is {$sumOfNumbers}" . PHP_EOL;
echo "The average is " . $sumOfNumbers / count($numbers) . PHP_EOL;