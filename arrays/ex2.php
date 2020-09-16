<?php declare(strict_types=1);

//Given numbers
$numbers = [20,30,25,35,-16,60,-100];
//Simple formula for calculating averages
$average = (array_sum($numbers))/(count($numbers));
echo $average . PHP_EOL;