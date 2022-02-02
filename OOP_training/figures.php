<?php

abstract class Figures
{
    protected string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

class Circle extends Figures
{
    protected float $radius;

    public function __construct(string $name, float $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function getArea(): float
    {
        return round($this->radius ** 2 * M_PI, 2);
    }
}

class Triangle extends Figures
{
    protected float $edge;

    public function __construct(string $name, float $edge)
    {
        parent::__construct($name);
        $this->edge = $edge;
    }

    public function getArea(): float
    {
        return round(sqrt(3) / 4 * $this->edge ** 2, 2);
    }
}

class Square extends Figures
{
    protected float $edge;

    public function __construct(string $name, float $edge)
    {
        parent::__construct($name,);
        $this->edge = $edge;
    }

    public function getArea(): float
    {
        return round($this->edge ** 2, 2);
    }
}

class TotalArea         // calculate area sum of all figures
{
    private array $figures = [];

    public function addFigures(Figures $figure)
    {
        return $this->figures[] = $figure;
    }
    public function getTotalArea(): float
    {
        $sum = 0;
        foreach ($this->figures as $figure) {
            $sum += $figure->getArea();
        }
        return $sum;
    }
}

$circle = new Circle('Circle', readline("Enter circle's radius: "));
echo $circle->getName() . ', area: ' . $circle->getArea() . PHP_EOL;

$triangle = new Triangle('Triangle', readline("Enter triangle's edge: "));
echo $triangle->getName() . ', area: ' . $triangle->getArea() . PHP_EOL;

$square = new Square('Square', readline("Enter square's edge: "));
echo $square->getName() . ', area: ' . $square->getArea() . PHP_EOL;

echo str_repeat('-', 30) . PHP_EOL;

$figures = new TotalArea();
$figures->addFigures($circle);
$figures->addFigures($triangle);
$figures->addFigures($square);

echo "Figures total area is: " . $figures->getTotalArea() . PHP_EOL;
