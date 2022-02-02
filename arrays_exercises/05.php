<?php

// Code an interactive, two-player game of Tic-Tac-Toe. You'll use a two-dimensional array of chars.

$board = [
    ['-', '-', '-'],
    ['-', '-', '-'],
    ['-', '-', '-'],
];

$player1 = readline("Enter player 1: ");
$player2 = readline ("Enter player 2: ");

$activePlayer = $player1;

$combinations = [
    [
        [0, 0], [0, 1], [0, 2],
    ],
    [
        [1, 0], [1, 1], [1, 2]
    ],
    [
        [2, 0], [2, 1], [2, 2]
    ],
    [
        [0, 0], [1, 0], [2, 0],
    ],
    [
        [0, 1], [1, 1], [2, 1]
    ],
    [
        [0, 2], [1, 2], [2, 2]
    ],
    [
        [0, 2], [1, 1], [2, 0]
    ],
    [
        [0, 0], [1, 1], [2, 2]
    ]
];


function getWinner(array $combinations, array $board, string $activePlayer): bool
{
    foreach ($combinations as $combination) {
        foreach ($combination as $item)
        {
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
    foreach ($board as $item)
    {
        foreach ($item as $value)
        {
            echo "  $value  ";
        }
        echo PHP_EOL;
    }
}

while (!isBoardFull($board) && !getWinner($combinations, $board, $activePlayer)) {
    drawBoard($board);

    $position = readline('Enter position ({$activePlayer}) :'); // row, col
    [$row, $column] = explode(',', $position);

    // checj if there is $row and $column variables
    // check the scope of $row and $column keys exist in $board

    if (!isset($board[$row][$column]) || $board[$row][$column] !== '-') {
        echo 'Invalid position. It is taken!' . PHP_EOL;
        continue;
    }

    $board[$row][$column] = $activePlayer;

    if (getWinner($combinations, $board, $activePlayer))
    {
        echo 'Winner is ' . $activePlayer;
        echo PHP_EOL;
        exit;
    }

    $activePlayer = $player1 === $activePlayer ? $player2 : $player1;
}

echo 'The game was tied.';
echo PHP_EOL;

