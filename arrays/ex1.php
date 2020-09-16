<?php declare(strict_types=1);

//Unsorted number
$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

//Store the numbers in their original state
$unsortedNumbers = $numbers;
//Sort the numbers array
sort($numbers);
echo "Original numeric array: " . implode(' ', $unsortedNumbers) . PHP_EOL;

echo "Sorted numeric array: " . implode(' ', $numbers) . PHP_EOL;

//Unsorted words
$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];

//Same ordeal as before
$unsortedWords = $words;
sort($words);

echo "Original string array: " . implode(', ', $unsortedWords) . PHP_EOL;

echo "Sorted string array: " . implode(', ', $words) . PHP_EOL;