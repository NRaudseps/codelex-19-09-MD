<?php

$n = readline('Input number: ');
$terms = readline('Input number of terms: ');

for($i = 1; $i < $terms+1; $i++){
    $n *= $n;
}
echo strval($n) . PHP_EOL;