<?php declare(strict_types=1);

function sumOfNumbers(int $min, $max): string{
    $sum = $max/2 * ($min+$max); // Formula Aritmetiskai Progresijai. Sis ir O(1), kamer skaitit ar for loopu butu O(n)
    $average = ($min+$max)/2; //Tas pats

    return 'Sum: ' . $sum . ' Average: ' . $average . "\n";
}

echo sumOfNumbers(23, 1513);
