<?php

function display_board(array $board): void
{
    foreach ($board as $value) {
        foreach ($value as $item)
            echo "$item ";
        echo PHP_EOL;
    }
}

$moneyOnHand = 100;
$spinCost = 5;
$options = ["A" => 5, "B" => 10, "C" => 20, "D" => 50];
$boardRowSize = 3;
$boardColumnSize = 4;
$board = array_fill(0, $boardRowSize, array_fill(0, $boardColumnSize, '-'));

$combinations =
    [
        [0, 0, 0, 0],
        [1, 1, 1, 1],
        [2, 2, 2, 2],
        [0, 1, 2, 2],
        [2, 1, 0, 0]
    ];

while (true) {
    echo "You have EUR {$moneyOnHand}" . PHP_EOL;
    echo "[1] Play" . PHP_EOL;
    echo "[2] Change spin cost" . PHP_EOL;
    echo "[3] Exit" . PHP_EOL;
    $playerChoice = readline();

    switch ($playerChoice) {
        case 1:
            if ($spinCost > $moneyOnHand) {
                echo "You do not have money enough. Change your spun cost or get out!" . PHP_EOL;
                break;
            }

            foreach ($board as $rowIndex => $item) {
                foreach ($item as $columnIndex => $value) {
                    $board[$rowIndex][$columnIndex] = array_rand($options);
                }
            }

            display_board($board);
            $moneyOnHand -= $spinCost;

            $combinationBoard = [];
            foreach ($combinations as $index => $combination) {
                foreach ($combination as $row => $column) {
                    $combinationBoard[$index][] = $board[$column][$row];
                }
            }
            $playerWonAmount = 0;
            foreach ($combinationBoard as $combination) {
                if ((count(array_unique($combination)) === 1)) {
                    $playerWonAmount += $options[$combination[0]] * $spinCost;
                }
            }
            if ($playerWonAmount > 0) {
                $moneyOnHand += $playerWonAmount;
                echo "You won EUR {$playerWonAmount}" . PHP_EOL;
            } else {
                echo "You did not have any combinations" . PHP_EOL;
            }

            break;
        case 2:
            echo "You have EUR {$moneyOnHand}" . PHP_EOL;
            $chanceToChangeSpinCost = readline("Enter your chosen spin cost (multiplier)");
            if ($chanceToChangeSpinCost <= $moneyOnHand) {
                $spinCoast = $chanceToChangeSpinCost;
                echo "Your spin cost is changed to {$spinCost}" . PHP_EOL;
            } else {
                echo "Sorry, you don`t have that much money" . PHP_EOL;
            }

            break;
        default:
            echo "Thank you for playing!" . PHP_EOL;
            exit;
            break;
    }
}
