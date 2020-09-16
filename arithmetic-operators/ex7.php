<?php declare(strict_types=1);

$acc = -9.81;//Acceleration of gravity
$time = 10;//Time measured in seconds

function gravityCalculator(float $acc,int $time): float{
    //The gravity formula:
    //https://github.com/codelex-io/php-syllabus/blob/main/php-basics/arithmetic-operations/gravity-formula.png
    return 0.5*$acc*$time**2;
}
echo gravityCalculator($acc, $time) . 'm' . PHP_EOL;