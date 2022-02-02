<?php

// read from file person.txt

[$name, $cash] = explode(',', file_get_contents('person.txt')); // explode and implode in array, use array extract

$person = new stdClass();
$person->name = $name;
$person->cash = (float)$cash;

function createProduct(string $name, string $color, string $scale, string $manufacturer, float $price): stdClass
{
    $product = new stdClass();
    $product->name = $name;
    $product->color = $color;
    $product->scale = $scale;
    $product->manufacturer = $manufacturer;
    $product->price = $price;
    return $product;
}

// read products from file products.csv

if (($handle = fopen("products.csv", "r")) !== false) {
    while (($data = fgetcsv($handle, 1000, ",")) !== false) {
        [$name, $color, $scale, $manufacturer, $price] = $data;                       // array extract
        $products[] = createProduct($name, $color, $scale, $manufacturer, (float)$price); // type  (float) is optional, string is by default
    }
    fclose($handle);
}

echo "{$person->name} has {$person->cash} euros." . PHP_EOL . PHP_EOL;

$cart = [];

if (file_exists('cart.txt')) {
    $cart = explode(',', file_get_contents('cart.txt'));
}

while (true) {           // because it work all the time
    echo '[1] Purchase' . PHP_EOL;
    echo '[2] Checkout' . PHP_EOL;
    echo '[Any] Exit' . PHP_EOL;

    $option = (int)readline("Select a option: ");

    switch ($option) {
        case 1:     // add to cart

            foreach ($products as $index => $product) {       // $index - key-value, to select by key of array
                echo "({$index}) {$product->name} - {$product->price}" . PHP_EOL;
            }

            $selectProduct = (int)readline('Select product by index: ');

            $product = $products[$selectProduct] ?? null;     // shorter if statement below, checks if item is set in array (by key)

//            if (isset($products[$selectWeapon])) {
//                $product = $products[$selectWeapon];
//            } else {
//                $product = null;
//            }

            if ($product === null) {
                echo "Product not found!" . PHP_EOL;    // if seleceted key does not exist in array
                exit;
            }

            $cart[] = $selectProduct;     // array_push can be used

            echo "{$product->name} added to chart." . PHP_EOL;
            break;
        case 2:  // checkout
            $totalSum = 0;
            foreach ($cart as $productIndex) {
                $product = $products[$productIndex];
                $totalSum += $product->price;
                echo "{$product->name}" . PHP_EOL;
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

            // after checkout cart is empty (empty array = delete cart.txt file
            if (file_exists('cart.txt')) {
                unlink('cart.txt');
            }

            exit;
        default: // exit
            $productsSavedInCart = implode(',', $cart);
            file_put_contents('cart.txt', $productsSavedInCart);
            exit;
    }
}