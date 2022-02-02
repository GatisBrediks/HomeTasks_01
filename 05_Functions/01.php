<?php

// Create a function that accepts any string and returns the same value with added "codelex" by the end of it.
// Print this value out.

function addCodelex(string $myString): string {
    return $myString . " codelex";
}

echo addCodelex("Gatis") . PHP_EOL;