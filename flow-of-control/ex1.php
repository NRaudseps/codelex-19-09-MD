<?php declare(strict_types=1);

//Input all three numbers in an array
$input[0] = (int) readline('Input the 1st number: ');
$input[1] = (int) readline('Input the 2nd number: ');
$input[2] = (int) readline('Input the 3rd number: ');
//Output the maximum in of the array
echo max($input) . PHP_EOL;