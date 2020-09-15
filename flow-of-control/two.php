<?php

$input = readline('Enter your number: ');
if($input > 0){
    echo 'Your number is positive.';
}
elseif ($input < 0){
    echo 'Your number is negative.';
}
else {
    echo 'Your number is 0.';
}
echo PHP_EOL;