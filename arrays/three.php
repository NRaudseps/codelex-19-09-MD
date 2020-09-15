<?php declare(strict_types=1);

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

$input = (int) readline('Enter the value to search for: ');
if(in_array($input, $numbers)){
    echo 'Numbers contains ' . strval($input) . PHP_EOL;
}
else {
    echo "Numbers doesn't contain " . strval($input) . PHP_EOL;
}
