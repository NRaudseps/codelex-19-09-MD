<?php

$input = readline('Enter your number (must be positive): ');
if($input > 0) {
    echo 'Your number is ' . strval(strlen($input)) . ' digit(s) long.';
}
else {
    echo 'Enter a positive number';
}
echo PHP_EOL;