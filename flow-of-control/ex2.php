<?php declare(strict_types=1);

$input = (int) readline('Enter your number: ');//Input
//Positive
if((int) $input > 0){
    echo 'Your number is positive.';
}
//Negative
elseif ((int) $input < 0){
    echo 'Your number is negative.';
}
//Number is 0
else {
    echo 'Your number is 0.';
}
echo PHP_EOL;