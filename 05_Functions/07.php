<?php

// Imagine you own a gun store. Only certain guns can be purchased with license types.
// Create an object (person) that will be the requester to purchase a gun (object) Person object has a name,
// valid licenses (multiple) & cash. Guns are objects stored within an array.
// Each gun has license letter, price & name. Using PHP in-built functions determine
// if the requester (person) can buy a gun from the store.

$person = new stdClass();
$person->name = 'Gatis';
$person->cash = (int) readline("Enter cash: ");
$person->licences = ['A', 'C'];

function createWeapon(string $name, float $price, string $licence = null): stdClass
{
    $weapon = new stdClass();
    $weapon->name = $name;
    $weapon->licence = $licence;
    $weapon->price = $price;
    return $weapon;
}

$weapons = [
    createWeapon('AK47', 1000, 'C'),
    createWeapon('Deagle', 500, 'B'),
    createWeapon('knife', 100),
    createWeapon('Glock', 250, 'A'),
];

echo "{$person->name} has {$person->cash} euros." . PHP_EOL . PHP_EOL;

$chart = [];

while (true) {           // because it work all the time
    echo '[1] Purchase' . PHP_EOL;
    echo '[2] Checkout' . PHP_EOL;
    echo '[Any] Exit' . PHP_EOL;

    $option = (int)readline("Select a product: ");

    switch ($option) {
        case 1:     // add to chart

            foreach ($weapons as $index => $weapon) {       // $index - key-value, to select by key of array
                echo "({$index}) {$weapon->name} (licence {$weapon->licence}) - {$weapon->price}" . PHP_EOL;
            }

            $selectWeapon = (int)readline('Select weapon index: ');

            $weapon = $weapons[$selectWeapon] ?? null;     // shorter if statement below, checks if item is set in array (by key)

//            if (isset($weapons[$selectWeapon])) {
//                $weapon = $weapons[$selectWeapon];
//            } else {
//                $weapon = null;
//            }

            if ($weapon === null) {
                echo "Product not found!" . PHP_EOL;    // if seleceted key does not exist in array
                exit;
            }

            if ($weapon->licence !== null && !in_array($weapon->licence, $person->licences)) {      // checks licence; ! - reverse If statement, does not exist in_array
                echo 'Invalid licence!' . PHP_EOL;
                exit;
            }


            $chart[] = $weapon;     // array_push can be used

            echo "{$weapon->name} added to chart." . PHP_EOL;
            break;
        case 2:  // checkout
            $totalSum = 0;
            foreach ($chart as $weapon) {
                $totalSum += $weapon->price;
                echo "{$weapon->name}" . PHP_EOL;
            }
            echo "-------------------------" . PHP_EOL;
            echo "Total: $totalSum euro";
            echo PHP_EOL;

            if ($person->cash >= $totalSum) {
                echo "Successful payment. Thank you!";
            } else {
                echo "Sorry, you don't have cash enough!";
    }
            echo PHP_EOL;
            exit;
        default:
            exit;
    }
}


