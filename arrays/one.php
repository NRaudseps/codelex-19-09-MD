<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

//todo
//$sort = sort($numbers);
//var_dump($sort);
//$sortedNumbers = implode(' ', $numbers);
$unsortedNumbers = $numbers;
sort($numbers);
echo "Original numeric array: " . implode(' ', $unsortedNumbers) . PHP_EOL;

//todo
echo "Sorted numeric array: " . implode(' ', $numbers) . PHP_EOL;

$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];

$unsortedWords = $words;
sort($words);
//todo
echo "Original string array: " . implode(', ', $unsortedWords) . PHP_EOL;

//todo
echo "Sorted string array: " . implode(', ', $words) . PHP_EOL;