<?php

echo str_repeat('-', 10) . "RUMBULA" . str_repeat('-', 10) . PHP_EOL;

class Car
{
    public int $index;
    public string $make;
    public string $model;
    public int $firstRegistrationYear;
    public string $color;
    public int $price;
    public bool $isAvailable;

    public function __construct(int $index, string $make, string $model, int $firstRegistrationYear,
                                string $color, int $price, bool $isAvailable)
    {
        $this->index = $index;
        $this->make = $make;
        $this->model = $model;
        $this->firstRegistrationYear = $firstRegistrationYear;
        $this->color = $color;
        $this->price = $price;
        $this->isAvailable = $isAvailable;
    }

//    public function getAvailableCarsList()
//    {
//        if (!$this->isAvailable = true) {
//            die ("This car is not available");
//        } else {
//            $result = $this->index . ', Model: '
//                . $this->make . ' '
//                . $this->model . ', year: '
//                . $this->firstRegistrationYear . ', color: '
//                . $this->color . ', price (EUR): '
//                . $this->price;
//        }
//        return $result;
//    }
//}
}

$car1 = new Car(00, 'BMW', '530 Gran Turismo', 2010, 'dark grey', 13500, true);
$car2 = new Car(01, 'Jaguar', 'XF', 2008, 'white', 6500, true);
$car3 = new Car(02, 'Nissan', 'Qashqai', 2016, 'black', 12500, true);
$car4 = new Car(03, 'SAAB', '9-5 Aero', 2004, 'dark blue', 2000, true);
$car5 = new Car(04, 'Volvo', 'V70', 2006, 'silver', 3500, true);


//echo $car1->getAvailableCarsList() . PHP_EOL;
//echo $car2->getAvailableCarsList() . PHP_EOL;
//echo $car3->getAvailableCarsList() . PHP_EOL;
//echo $car4->getAvailableCarsList() . PHP_EOL;
//echo $car5->getAvailableCarsList() . PHP_EOL;

class Shop
{
    public array $availableCars = [];

//    public function getAvailableCars(Car $car)
//    {
//        return $this->availableCars[] = $car;
//    }
}

$availableCars = new Shop();

echo "Avalable cars: " . PHP_EOL;
echo str_repeat('-', 20) . PHP_EOL;
echo "Reserved cars:" . PHP_EOL;





