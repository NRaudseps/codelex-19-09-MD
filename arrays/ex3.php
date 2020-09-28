<?php declare(strict_types=1);

//Given numbers
$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

$input = (int) readline('Enter the value to search for: ');//Input from user
//Checks to see if number is in array
if(in_array($input, $numbers)){
    echo 'Numbers array contains ' . strval($input) . PHP_EOL;
}
else {
    echo "Numbers array doesn't contain " . strval($input) . PHP_EOL;
}
