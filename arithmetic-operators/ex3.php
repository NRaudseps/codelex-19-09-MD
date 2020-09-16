<?php declare(strict_types=1);

//Upper bound and Lower Bound are given as parameters in the function
function sumOfNumbers(int $lowerBound, int $upperBound): string{
    //This is the formula for an Arithmetic Series
    //Wikipedia link: https://en.wikipedia.org/wiki/Arithmetic_progression
    //It is much more efficient than looping all the numbers
    $sum = $upperBound/2 * ($lowerBound+$upperBound);
    $average = ($lowerBound+$upperBound)/2;

    return 'Sum: ' . $sum . ' Average: ' . $average . "\n";
}

echo sumOfNumbers(1, 100);
