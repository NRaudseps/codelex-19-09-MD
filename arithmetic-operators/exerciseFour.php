<?php declare(strict_types=1);

function factorial(int $a): int{
    $num = 1;
    for($i = 1; $i <= $a; $i++){
        $num = $num * ($i);
    }
    return $num;
}

echo factorial(10);