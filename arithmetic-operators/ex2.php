<?php declare(strict_types=1);

//Basic Ternary operator
function checkOddEven(int $n):string {
    //I chose to write it in "\n" because why not
    return $n % 2 === 0 ? 'Even Number' . "\n" . 'Bye!' . "\n"
        : 'Odd Number' . "\n" . 'Bye!' . "\n";
}

echo checkOddEven(23);