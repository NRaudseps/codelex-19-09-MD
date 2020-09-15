<?php

$numbers = [];
$firstNumber = readline('Input the 1st number: ');
$secondNumber = readline('Input the 2nd number: ');
$thirdNumber = readline('Input the 3rd number: ');
$numbers = [$firstNumber, $secondNumber, $thirdNumber];
echo max($numbers);