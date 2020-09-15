<?php declare(strict_types=1);

//wage in cents
function pay(int $basePay, $hours){
    if($basePay < 800){
        return 'Too low of a wage' . PHP_EOL;
    }
    if($hours > 60){
        return 'Too high of a workload' . PHP_EOL;
    }

    $wage = 0;
    for($i = 0; $i < $hours; $i++){
        if($i <= 40){
            $wage += $basePay;
        }
        else {
            $wage += $basePay*1.5;
        }
    }
    return 'Total Pay: ' . strval($wage/100) . '$' . PHP_EOL;
}

echo pay(1000, 60);