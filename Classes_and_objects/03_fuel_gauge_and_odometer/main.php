<?php

require_once 'Tyre.php';
require_once 'FuelGauge.php';
require_once 'Odometer.php';
require_once 'Vehicle.php';

$make_model = readline('Car model: ');
$fuelGaugeAmount = (int) readline('Fuel gauge amount: ');
$driveDistance = (int) readline('Drive distance: ');

$vehicle = new Vehicle($make_model, 1605, $fuelGaugeAmount);

echo str_repeat('-', 10) . $vehicle->getMakeModel() . str_repeat('-', 10) . PHP_EOL;

$pinCode = (int) readline('Enter PIN, please: ');
$vehicle->start($pinCode);

if (!$vehicle->hasStarted()) {
    echo "{$vehicle->getMakeModel()} has not started!" . PHP_EOL;
}

while ($vehicle->getFuel() > 0 && $vehicle->hasValidTires() && $vehicle->hasStarted()) {

    echo "Fuel: " . $vehicle->getFuel() . " l" . PHP_EOL;
    echo "Mileage: " . $vehicle->getMileage() . " km" . PHP_EOL;

    foreach ($vehicle->getTires() as $tyre)
    {
        echo "Tyre ({$tyre->getPosition()}): " . $tyre->getCondition() . " %" . PHP_EOL;
    }

    $vehicle->drive($driveDistance);

    sleep(1);
}




