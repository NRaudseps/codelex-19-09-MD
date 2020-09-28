<?php declare(strict_types=1);

$input = (int) readline('Enter your number (must be positive): ');
//Returns digits of input
if($input > 0) {
    echo 'Your number is ' . strlen(strval($input)) . ' digit(s) long.';
}
//If not positive than respond
else {
    echo 'Enter a positive number';
}
echo PHP_EOL;