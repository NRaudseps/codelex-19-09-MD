<?php declare(strict_types=1);

//Input words
$firstWord = (string)readline('Enter first word: ');
$secondWord = (string)readline('Enter second word: ');

//Calculates how many dots there will be. The end result should always be 30
$dotCount = 30 - (strlen(strval($firstWord)) + strlen(strval($secondWord)));

//If the end result is larger than 30
if ((int)$dotCount <= 0) {
    echo 'The words are too large.' . PHP_EOL;
} else {
    echo strval($firstWord);
    //Add the appropriate number of dots
    for ($i = 0; $i < $dotCount; $i++) {
        echo '.';
    }
    echo strval($secondWord) . PHP_EOL;
}