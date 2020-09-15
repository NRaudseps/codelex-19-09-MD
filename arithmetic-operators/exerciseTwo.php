<?php declare(strict_types=1);

function checkOddEven(int $n):string {
    return $n % 2 === 0 ? 'Even Number' . "\n" . 'Bye!' . "\n"
        : 'Odd Number' . "\n" . 'Bye!' . "\n";
}

echo checkOddEven(24);