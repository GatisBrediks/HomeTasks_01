<?php

echo 'Rock, paper, scissors' . PHP_EOL;

$elements = ['rock', 'paper', 'scissors', 'lizard', 'spock'];
$player = readline ('Enter your option (paper, rock, scissors): ');
$computerChoice = $elements[array_rand($elements)];

$winnerCombinations = [
    'scissors' => ['paper', 'lizard'],
    'rock' => ['scissors', 'lizard'],
    'paper' => ['rock', 'spock'],
    'lizard' => ['spock', 'paper'],
    'spock' => ['scissors', 'rock']
];

echo "$player VS $computerChoice" . PHP_EOL;

if ($player === $computerChoice) {
    echo "It is TIE!" . PHP_EOL;
    exit;
}

echo in_array($computerChoice, $winnerCombinations[$player]) ? 'Player win!' : 'Loooooooser!!!!';
echo PHP_EOL;

//if ($winnerCombinations[$player] === $computerChoice) {
//    echo "Player win!" . PHP_EOL;
//} else {
//    echo "Loooooooser!!!!" . PHP_EOL;
//}


