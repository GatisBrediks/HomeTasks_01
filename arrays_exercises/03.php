<?php
$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

echo "Enter the value to search for: " . PHP_EOL;

// todo check if an array contains a value user entered

$enteredNumber = (int) readline(" ");
if (!in_array($enteredNumber, $numbers)) {
    echo "Sorry, you missed! Try once more." . PHP_EOL;
} else {
    echo "Got ya'!" . PHP_EOL;
}