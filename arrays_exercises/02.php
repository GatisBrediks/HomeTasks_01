<?php


$numbers = [20, 30, 25, 35, -16, 60, -100];

// todo calculate an average value of the numbers

function average($numbers) {
    return array_sum($numbers) / count($numbers);
}

echo average($numbers) . PHP_EOL;
