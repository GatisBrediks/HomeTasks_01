<?php

// Create a 2D associative array in 2nd dimension with fruits and their weight.
// Create a function that determines if fruit has weight over 10kg.
// Create a secondary array with shipping costs per weight.
// Meaning that you can say that over 10 kg shipping costs are 2 euros, otherwise its 1 euro.
// Using foreach loop print out the values of the fruits and how much it would cost to ship this product.

function isWeightOverTen(array $fruit, int $weight = 10): bool
{
    return $fruit['weight'] >= $weight;
}

$fruits = [
    [
        'name' => 'banana',
        'weight' => 12
    ],
    [
        'name' => 'cherry',
        'weight' => 4
    ],
    [
        'name' => 'orange',
        'weight' => 13
    ],
    [
        'name' => 'lemon',
        'weight' => 9
    ],
    [
        'name' => 'apple',
        'weight' => 11
    ]
];

$shippingCosts = [
    'over 10 kg' => 2,
    'less than 10 kg' => 1,
];

foreach ($fruits as $fruit) {

    if (isWeightOverTen($fruit)) {
        echo $fruit['name'] . " shipping costs are " .  $shippingCosts ['over 10 kg'] . " euros. " . PHP_EOL;
    } else {
        echo $fruit['name'] . " shipping costs are " .  $shippingCosts ['less than 10 kg'] . " euros. " . PHP_EOL;
    }
}

