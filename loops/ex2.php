<?php declare(strict_types=1);

//Input starting number
$n = (int)readline('Input number: ');
//Input the number of terms
$terms = (int)readline('Input number of terms: ');

for ((int)$i = 1; $i < $terms + 1; $i++) {
    $n *= $n;//Multiplies the number by itself
}
echo strval($n) . PHP_EOL;