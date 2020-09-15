<?php declare(strict_types=1);

$arrOne = [];
for($i = 0; $i < 10; $i++){
    $arrOne[$i] = rand(1,100);
}
$arrTwo = $arrOne;
$arrTwo[9] = -7;
echo 'Array 1: ' . implode(' ', $arrOne) . PHP_EOL;
echo 'Array 2: ' . implode(' ', $arrTwo) . PHP_EOL;
