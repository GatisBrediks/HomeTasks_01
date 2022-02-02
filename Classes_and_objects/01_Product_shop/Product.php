<?php

/**
 Create a class Product that represents a product sold in a shop. A product has a price, amount and name.
Print out information about them.
Add new behaviour to the Product class:
    possibility to change quantity
    possibility to change price
Reflect your changes in a working application.
*/

class Product
{
    private string $name;
    private float $price;
    private int $amount;

    public function __construct(string $name, float $price, int $amount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function printProduct(): string
    {
        return $this->name . ", price: " . $this->price . " EUR, amount: " . $this->amount;
    }

     public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }
}

$product1 = new Product("Logitech mouse", 70, 14);
$product2 = new Product("iPhone 5s", 999.99, 3);
$product3 = new Product("Epson EB-U05", 440.46, 1);

$product1->setPrice(60.99);
$product3->setAmount(10);

echo $product1->printProduct() . PHP_EOL;
echo $product2->printProduct() . PHP_EOL;
echo $product3->printProduct() . PHP_EOL;