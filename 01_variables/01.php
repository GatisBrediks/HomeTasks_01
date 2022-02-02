<?php

// Create variable that prints out an integer 10, float 10.10, string "hello world"

$myInteger = 10;
$myFloat = 10.10;
$myString = 'hello world';


echo $myInteger . PHP_EOL . number_format(($myFloat), 2) . PHP_EOL . $myString . PHP_EOL;

