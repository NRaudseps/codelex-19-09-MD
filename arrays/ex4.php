<?php declare(strict_types=1);

//Empty array
$arrOne = [];
//10 times put a random integer in the array from 1 - 100
for($i = 0; $i < 10; $i++){
    $arrOne[$i] = rand(1,100);
}
$arrTwo = $arrOne;//Copy elements from one array to another
//Change the last one to -7. Make sure it is placed in the last index of the array
$arrTwo[count($arrOne)-1] = -7;
//Output both arrays
echo 'Array 1: ' . implode(' ', $arrOne) . PHP_EOL;
echo 'Array 2: ' . implode(' ', $arrTwo) . PHP_EOL;
