<?php

// Using dump method, dump out all 3 values.

$person = new stdClass();
$person->name = "John";
$person->surname = "Doe";
$person->surname = 50;

echo var_dump($person);

