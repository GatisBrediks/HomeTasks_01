<?php

// Create a person object with name, surname and age.
// Create a function that will determine if the person has reached 18 years of age.
// Print out if the person has reached age of 18 or not.

$person = new stdClass();
$person->name = "Gatis";
$person->surname = "Brediks";
$person->age = 15;

//var_dump($person);

function isEighteenYearsOld(stdClass $person):bool {
    return $person->age >= 18;
}

echo "{$person->name} {$person->surname} ";
echo isEighteenYearsOld($person) ? "is at least 18 years old" : "is not 18 years old yet";
