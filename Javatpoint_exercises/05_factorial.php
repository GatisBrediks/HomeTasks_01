<?php

$number = readline('Enter number: ');
$factorial = 1;
for ($i=$number;$i>=1;$i--){
    $factorial *= $i;
}
echo $factorial . PHP_EOL;


