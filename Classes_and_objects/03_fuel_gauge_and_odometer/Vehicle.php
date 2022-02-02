<?php

class Vehicle
{
    private string $make_model;
    private FuelGauge $fuelGauge;
    private Odometer $odometer;

    private const CONSUMPTION_PER_KM = 0.07;
    private const TIRE_QUALITY_LOSS_PER_KM = [1, 2];

    private array $tires;
    private int $pinCode;
    private bool $started = false;

    public function __construct(string $make_model, int $pinCode, int $fuelGaugeAmount)
    {
        $this->make_model = $make_model;
        $this->pinCode = $pinCode;
        $this->fuelGauge = new FuelGauge($fuelGaugeAmount);
        $this->odometer = new Odometer();;
        $this->tires = [
            new Tyre('front left'),
            new Tyre('front right'),
            new Tyre('back left'),
            new Tyre('back right')
        ];
    }

    public function hasStarted(): bool
    {
        return $this->started;
    }

    public function start(int $pinCode): void
    {
        if ($this->pinCode !== $pinCode) return;
        // check acu
        $this->started = true;
    }


    public function drive(int $distance = 10): void
    {
        if ($this->fuelGauge->getFuel() <= 0) return;;

        $this->fuelGauge->change($distance * -self::CONSUMPTION_PER_KM);
        $this->odometer->addMileage($distance);

        [$minQualityLoss, $maxQualityLoss] = self::TIRE_QUALITY_LOSS_PER_KM;
        foreach ($this->tires as $tyre) {
            $tyre->changeCondition(rand($minQualityLoss * $distance, $maxQualityLoss * $distance));
        }
    }

    public function getMakeModel(): string
    {
        return $this->make_model;
    }

    public function getFuel(): float
    {
        return $this->fuelGauge->getFuel();
    }

    public function getMileage(): int
    {
        return $this->odometer->getMileage();
    }

    public function hasValidTires(): bool
    {
        $brokenTires = [];
        foreach ($this->tires as $tyre) {
            if ($tyre->getCondition() <= 0) {
                $brokenTires[] = $tyre;
            }
        }
        return count($brokenTires) < 1;
    }

    public function getTires(): array
    {
        return $this->tires;
    }
}

