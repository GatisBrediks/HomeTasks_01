<?php

// Create a array of objects that uses the function of exercise 3 but in loop printing out
// if the person has reached age of 18.

function createPerson(string $name, string $surname, int $age): stdClass {

    $person = new stdClass();
    $person->name = $name;
    $person->surname = $surname;
    $person->age = $age;
    return $person;

}

$persons = [
    createPerson("Gatis", "Brediks", 40),
    createPerson("Alesandrs", "Ivanovs", 17)
];

//$person1 = new stdClass();
//$person1->name = "John";
//$person1->surname = "Smith";
//$person1->age = 40;
//
//$person2 = new stdClass();
//$person2->name = "Roy";
//$person2->surname = "Gabriel";
//$person2->age = 17;
//
//$persons = [$person1, $person2];

function isAdult(stdClass $person, int $age): bool // age can be assigned by default 18;
{
    return $person->age >= $age;
}

$age = (int) readline("Type the age: ");

foreach ($persons as $person) {

    echo "{$person->name} {$person->surname} ";
    if (isAdult($person, $age)) {
        echo "has reached age of " . $age . PHP_EOL;
    } else {
        echo "has not reached age of " . $age . PHP_EOL;
    }
}


