<?php

$firstWord = readline('Enter first word: ');
$secondWord = readline('Enter second word: ');

$dotCount = 30 - (strlen(strval($firstWord)) + strlen(strval($secondWord)));

if($dotCount <= 0) {
    echo 'The words are too large.' . PHP_EOL;
}
else {
    echo strval($firstWord);
    for ($i = 0; $i < $dotCount; $i++) {
        echo '.';
    }
    echo strval($secondWord) . PHP_EOL;
}