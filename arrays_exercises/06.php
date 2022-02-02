<?php

//Write a program to play a word-guessing game like Hangman.
//
//It must randomly choose a word from a list of words.
//It must stop when all the letters are guessed.
//It must give them limited tries and stop after they run out.
//It must display letters they have already guessed (either only the incorrect guesses or all guesses).

$listOfWords = ["antivakseris", "rododendrs", "funkcija", "garnele"];
$computerSelectedWord = $listOfWords[array_rand($listOfWords)];
$maximumGuesses = strlen($computerSelectedWord);

$letters = str_split($computerSelectedWord);
$hiddenChar = '-';
$hiddenWord = str_repeat($hiddenChar, count($letters));

$missedChars = [];

while (true) {
    echo "Guess the word: " . $hiddenWord . PHP_EOL;
    $guess = readline('Type a character: ');
    echo "Characters you missed: " . implode(', ', $missedChars) . PHP_EOL;

    if (in_array($guess, $letters)) {
        $keys = array_keys($letters, $guess);
        foreach ($keys as $key) {
            $hiddenWord[$key] = $guess;
        }
        if ($hiddenWord == $computerSelectedWord) {
            echo "Congrats! You win!" . PHP_EOL;
            break;
        }
    } else {
        $missedChars[] = $guess;
        if (count($missedChars) == $maximumGuesses) {
            echo "You lost. The word you had to guess is $computerSelectedWord " . PHP_EOL;
            break;
        }
    }
}




