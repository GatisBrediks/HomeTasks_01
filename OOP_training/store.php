<?php

// Create products and display them, display product total sum as well.

class Products
{
    public string $name;
    public float $price;
    public int $available;

    public function __construct(string $name, float $price, int $available) {
        $this->name = $name;
        $this->price = $price;
        $this->available = $available;
    }
}

$product1 = new Products('Panna', 30.99, 2);
$product2 = new Products('Vīns', 12.50, 4);
$product3 = new Products('Puzzle', 10, 3);

class Shop {

    public array $inventory = [];

    public function addProduct(Products $product) {
        return $this->inventory[] = $product;
    }

    public function totalSum(): float {
        $sum = 0;
        foreach ($this->inventory as $product) {
            $sum += $product->price * $product->available;
        }
        return $sum;
    }

}
$inventory = new Shop();

$inventory->addProduct($product1);
$inventory->addProduct($product2);
$inventory->addProduct($product3);

echo $product1->name . ", price (EUR); " . $product1->price . ', available: ' . $product1->available . PHP_EOL;
echo $product2->name . ", price (EUR); " . $product2->price . ', available: ' . $product2->available . PHP_EOL;
echo $product3->name . ", price (EUR); " . $product3->price . ', available: ' . $product3->available . PHP_EOL;
echo str_repeat('-', 20) . PHP_EOL;
echo "Products total sum: " . $inventory->totalSum() . ' euros' . PHP_EOL;


