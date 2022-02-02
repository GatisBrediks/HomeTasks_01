<?php

/** Write a method named swapPoints that accepts two Points as parameters and swaps their x/y values.
 * Consider the following example code that calls swapPoints:
 * $p1 = new Point(5, 2);
 * $p2 = new Point(-3, 6);
 * swapPoints(p1, p2);
 * echo "(" . p1.x . ", " . p1.y . ")";
 * echo "(" . p2.x . ", " . p2.y . ")";
 * The output produced from the above code should be:
 *
 * (-3, 6)
 * (5, 2) */

class Point
{
    private int $x;
    private int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function swapPoints(int $p1, int $p2): void
    {
        $p1 = $p2;
        $p2 = $p1;
    }

}

$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);

swapPoints($p1, $p2);

echo "(" . $p1 . getX() . ", " . $p1 . $y . ")";
echo "(" . $p2 . $x . ", " . $p2 . $y . ")";