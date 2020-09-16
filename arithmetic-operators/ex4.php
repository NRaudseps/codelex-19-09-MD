<?php declare(strict_types=1);

//There is no good formula for calculating factorial so you have to loop it
function factorial(int $a): int{
    $num = 1;
    //$i has to be 1 otherwise the result will be zero
    for($i = 1; $i <= $a; $i++){
        $num = $num * ($i);//Same as n = n * (n+1)
    }
    return $num;
}

echo factorial(5) . PHP_EOL;