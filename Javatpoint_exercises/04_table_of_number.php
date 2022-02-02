<?php

$x = readline('Enter the number: ');
for ($i=$x; $i<=$x*10; $i+=$x) {
    echo $i . " ";
}
echo PHP_EOL;