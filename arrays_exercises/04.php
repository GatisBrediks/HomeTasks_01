<?php
//Write a program that creates an array of ten integers. It should put ten random numbers from 1 to 100 in the array.
// It should copy all the elements of that array into another array of the same size.
//
//Then display the contents of both arrays. To get the output to look like this, you'll need a several for loops.
//
//Create an array of ten integers
//Fill the array with ten random numbers (1-100)
//Copy the array into another array of the same capacity
//Change the last value in the first array to a -7
//Display the contents of both arrays
//Array 1: 45 87 39 32 93 86 12 44 75 -7
//Array 2: 45 87 39 32 93 86 12 44 75 50

$randomNumberArray = range(1, 100);
shuffle($randomNumberArray);
$slicedArray = array_slice($randomNumberArray, 0, 10);

$replaced = str_replace($slicedArray[9], "-7", $slicedArray);

echo "Array 1: " . implode(" ", $replaced) . PHP_EOL;

$copiedArray = &$randomNumberArray;
$copiedSlicedArray = array_slice($copiedArray, 0, 10);
echo "Array 2: " . implode(" ", $copiedSlicedArray) . PHP_EOL;











