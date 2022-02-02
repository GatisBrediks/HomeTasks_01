<?php

$board = [];
$combinations = [];

$boardAndCombinationsInFile = explode('#', file_get_contents('default.txt'));
// [$boardInFile, $combinationsInFile] = explode('#', file_get_contents('default.txt')); use array extract;
$boardInFile = explode(';', $boardAndCombinationsInFile[0]);
foreach ($boardInFile as $row) {
    $board[] = explode(',', $row);
}
$combinationList = explode('|', $boardAndCombinationsInFile[1]);
foreach ($combinationList as $combinationNumber => $combination) {
    foreach (explode(';', $combination) as $coordinateIndex => $coordinates) {
        [$x, $y] = explode(',', $coordinates);
        $combinations[$combinationNumber][$coordinates] = [(int) $x, (int) $y];
    }
}

if (!is_readable('default.txt')) {
    die('File does not exist or is not readable');
}

$player1 = readline("Enter player 1: ");
$player2 = readline("Enter player 2: ");

$activePlayer = $player1;

function getWinner(array $combinations, array $board, string $activePlayer): bool
{
    foreach ($combinations as $combination) {
        foreach ($combination as $item) {
            [$row, $column] = $item;
            if ($board[$row][$column] !== $activePlayer) {
                break;
            }
            if (end($combination) === $item) {
                return true;
            }
        }
    }
    return false;
}

function isBoardFull(array $board): bool
{
    foreach ($board as $row) {
        if (in_array('-', $row))
            return false;
    }
    return true;
}

function drawBoard(array $board): void
{
    foreach ($board as $item) {
        foreach ($item as $value) {
            echo "  $value  ";
        }
        echo PHP_EOL;
    }
}

while (!isBoardFull($board) && !getWinner($combinations, $board, $activePlayer)) {
    drawBoard($board);

    $position = readline("Enter position ({$activePlayer}): "); // row, col
    [$row, $column] = explode(',', $position);

    // check if there is $row and $column variables
    // check the scope of $row and $column keys exist in $board

    if (!isset($board[$row][$column]) || $board[$row][$column] !== '-') {  // if typed position does not exist in board or it is taken allready
        echo 'Position does not exist or it is taken!' . PHP_EOL;
        continue;
    }

    $board[$row][$column] = $activePlayer;

    if (getWinner($combinations, $board, $activePlayer)) {
        echo 'Winner is ' . $activePlayer;
        echo PHP_EOL;
        exit;
    }

    $activePlayer = $player1 === $activePlayer ? $player2 : $player1;
}

echo 'The game was tied.';
echo PHP_EOL;

