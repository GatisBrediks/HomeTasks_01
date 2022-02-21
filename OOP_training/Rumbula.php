<?php

echo str_repeat('-', 10) . "RUMBULA" . str_repeat('-', 10) . PHP_EOL;

class Car
{
    private int $index;
    private string $make;
    private string $model;
    private int $firstRegistrationYear;
    private string $color;
    private int $price;

    public function __construct(int $index, string $make, string $model, int $firstRegistrationYear,
                                string $color, int $price)
    {
        $this->index = $index;
        $this->make = $make;
        $this->model = $model;
        $this->firstRegistrationYear = $firstRegistrationYear;
        $this->color = $color;
        $this->price = $price;
    }

    public function getIndex(): int
    {
        return $this->index;
    }

    public function getMake(): string
    {
        return $this->make;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getFirstRegistrationYear(): int
    {
        return $this->firstRegistrationYear;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}


class Shop
{
    public array $availableCars = [];

//    public function getAvailableCars(Car $car)
//    {
//        return $this->availableCars[] = $car;
//    }
}


$car1 = new Car(00, 'BMW', '530 Gran Turismo', 2010, 'dark grey', 13500);
$car2 = new Car(01, 'Jaguar', 'XF', 2008, 'white', 6500);
$car3 = new Car(02, 'Nissan', 'Qashqai', 2016, 'black', 12500);
$car4 = new Car(03, 'SAAB', '9-5 Aero', 2004, 'dark blue', 2000);
$car5 = new Car(04, 'Volvo', 'V70', 2006, 'silver', 3500);

$availableCars = new Shop();

echo "Avalable cars: " . PHP_EOL;
echo str_repeat('-', 20) . PHP_EOL;
echo "Reserved cars:" . PHP_EOL;





