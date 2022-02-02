<?php

// See calculate-area.php
//
//Design a Geometry class with the following methods:
//
//A static method that accepts the radius of a circle and returns the area of the circle. Use the following formula:
//Area = π * r * 2
//Use Math.PI for π and r for the radius of the circle
//A static method that accepts the length and width of a rectangle and returns the area of the rectangle.
// Use the following formula: Area = Length x Width
//A static method that accepts the length of a triangle’s base and the triangle’s height.
// The method should return the area of the triangle. Use the following formula:
//Area = Base x Height x 0.5
//The methods should display an error message if negative values are used for the circle’s radius,
// the rectangle’s length or width, or the triangle’s base or height.
//
//Next write a program to test the class, which displays the following menu and responds to the user’s selection:
//
//Geometry calculator:
//
//Calculate the Area of a Circle
//Calculate the Area of a Rectangle
//Calculate the Area of a Triangle
//Quit
//Enter your choice (1-4):
//Display an error message if the user enters a number outside the range of 1 through 4 when selecting an item from the menu.

//echo "Geometry Calculator\n";
//echo "1. Calculate the Area of a Circle";
//echo "2. Calculate the Area of a Rectangle";
//echo "3. Calculate the Area of a Triangle";
//echo "4. Quit\n";
//echo "Enter your choice (1-4) : ";


function getAreaOfCircle(float $radiusOfCircle): float
{
    return round(pi() * $radiusOfCircle * 2, 2);
}

$radiusOfCircle = (float)readline("Enter the radius (r): ");
if ($radiusOfCircle <= 0) {
    echo "ERROR: invalid value!" . PHP_EOL;
} else {
    echo "Area of circle is " . getAreaOfCircle($radiusOfCircle) . PHP_EOL;
}
function getAreaOfRectangle(float $lenght, float $height): float
{
    return round($lenght * $height, 2);
}

$lenghtOfRerctangle = (float)readline("Enter the lenght of rectangle: ");
$heightOfRectangle = (float)readline("Enter the height of rectangle: ");

if ($lenghtOfRerctangle <= 0 || $heightOfRectangle <= 0) {
    echo "ERROR: invalid value!" . PHP_EOL;
} else {
    echo "Area of rectangle is " . getAreaOfRectangle($lenghtOfRerctangle, $heightOfRectangle) . PHP_EOL;
}

function getAreaOfTriangle(float $base, float $height): float
{
    return round($base * $height * 0.5, 2);
}

$base = (float)readline("Enter the lenght of Base: ");
$heightOfTriangle = (float)readline("Enter the lenght of Base: ");

if ($base <= 0 || $heightOfTriangle <= 0) {
    echo "ERROR: invalid value!" . PHP_EOL;
}

echo "Area of triangle is " . getAreaOfTriangle($base, $heightOfTriangle) . PHP_EOL;



