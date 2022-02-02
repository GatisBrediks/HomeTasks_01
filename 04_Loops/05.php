<?php

// Create an associative array with objects of multiple persons.
// Each person should have a name, surname, age and birthday.
// Using loop (by your choice) print out every persons personal data.

Class Person
{
    public $name;
    public $surname;
    public $age;
    public $birthday;

}

$gatis = new Person();
$gatis->name = "Gatis";
$gatis->surname = "Brediks";
$gatis->age = 40;
$gatis->birthday = "16.05.1981";

$inita = new Person();
$inita->name = "Inita";
$inita->surname = "Paramonova";
$inita->age = 34;
$inita->birthday = "06.01.1987";

$persons = [$gatis, $inita];

foreach ($persons as $person) {
    echo $person->name . " " . $person->surname . ', ' . $person->age . ", " . $person->birthday . PHP_EOL;
}

