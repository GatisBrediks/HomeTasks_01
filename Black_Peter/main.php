<?php

require_once 'Card.php';
require_once 'Deck.php';
require_once 'BlackPeter.php';
require_once 'Player.php';

$game = new BlackPeter();
$player = new Player();
$computer = new Player();

// Deal
for ($i = 0; $i < 25; $i++) {
    $player->addCard($game->deal());
}

for ($i = 0; $i < 24; $i++) {
    $computer->addCard($game->deal());
}

foreach ($player->getCards() as $card) {
    echo '| ' . $card->getDisplayValue() . ' |';
}

echo PHP_EOL;

$player->disband();

foreach ($player->getCards() as $card) {
    echo '| ' . $card->getDisplayValue() . ' |';
}

echo PHP_EOL;
echo "----------------------------------------";
echo PHP_EOL;

foreach ($computer->getCards() as $card) {
    echo '| ' . $card->getDisplayValue() . ' |';
}

echo PHP_EOL;

$computer->disband();

foreach ($computer->getCards() as $card) {
    echo '| ' . $card->getDisplayValue() . ' |';
}

echo PHP_EOL;


/**
 * while ($player->hasPairCards()) {
 *
 * } */