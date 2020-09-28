<?php declare(strict_types=1);

//Input starting number
$n = (int) readline('Input number: ');
//Input the number of terms
$terms = (int) readline('Input number of terms: ');

$startingN = $n; //Input number which $n will be multiplied
for ($i = 1; $i <= $terms; $i++) {
    $n *= $startingN; //Multiplies the number by starting number
}
echo strval($n) . PHP_EOL;