<?php

// Write a program that calculates and displays a person's body mass index (BMI).
// A person's BMI is calculated with the following formula: BMI = weight x 703 / height ^ 2.
// Where weight is measured in pounds and height is measured in inches.
// Display a message indicating whether the person has optimal weight, is underweight, or is overweight.
// A sedentary person's weight is considered optimal if his or her BMI is between 18.5 and 25.
// If the BMI is less than 18.5, the person is considered underweight. If the BMI value is greater than 25, the person is considered overweight.
//
//Your program must accept metric units.

function getImperialBMI(float $weight, float $height): float
{
    return round($weight * 703 / $height ** 2, 2);
}

function getMetricBMI(float $weight, float $height): float
{
    return round($weight / $height ** 2, 2);
}

$enterCase = readline("Choose measuring system (i - imperial, m - metric): ");

$minimumBMI = 18.5;
$maximumBMI = 25.0;

switch ($enterCase) {
    case 'i':
        $weight = (float)readline("Enter your weight: ");
        $height = (float)readline("Enter your height: ");
        if (getImperialBMI($weight, $height) > $maximumBMI) {
            echo "Your BMI is " . getImperialBMI($weight, $height) . ". It's overweight! Don't eat burgers and sweets so much!" . PHP_EOL;
        } elseif (getImperialBMI($weight, $height) < $minimumBMI) {
            echo "Your BMI is " . getImperialBMI($weight, $height) . ". It's underweight! You have to eat more!" . PHP_EOL;
        } else {
            echo "Your BMI is " . getImperialBMI($weight, $height) . ". It's normal." . PHP_EOL;
        }
        break;
    case 'm':
        $weight = (float)readline("Enter your weight: ");
        $height = (float)readline("Enter your height: ");
        if (getMetricBMI($weight, $height) > $maximumBMI) {
            echo "Your BMI is " . getMetricBMI($weight, $height) . ". It's overweight! Don't eat burgers and sweets so much!" . PHP_EOL;
        } elseif (getMetricBMI($weight, $height) < $minimumBMI) {
            echo "Your BMI is " . getMetricBMI($weight, $height) . ". It's underweight! You have to eat more!" . PHP_EOL;
        } else {
            echo "Your BMI is " . getMetricBMI($weight, $height) . ". It's normal." . PHP_EOL;
        }
        break;
    default:
        echo "Invalid index. Please enter correct!" . PHP_EOL;
        exit;
}





