<?php declare(strict_types=1);

//Pay method - the one that calculate the pay
//Wage in cents so that is is easier
function pay(int $basePay, int $hours): string{
    //Can't be lower than the minimum wage - $8.00
    if($basePay < 800){
        return 'Too low of a wage' . PHP_EOL;
    }
    //Can't work overtime or more than 60 hours
    if($hours > 60){
        return 'Too high of a workload' . PHP_EOL;
    }

    //If not working overtime
    if($hours <= 40){
        $wage = $hours*$basePay;
    }
    //If working overtime
    else{
        $overtime = $hours-40;//All the hours after 40
        $wage = $overtime*1.5*$basePay + 40*$basePay;
    }
    return 'Total Pay: ' . strval($wage/100) . '$' . PHP_EOL;
}

//Main method - goes through all the workers
function whatToPay($workers){
    foreach ($workers as $worker) {
        //1 - base pay; 2 - hours worked
        echo pay($worker[1], $worker[2]);
    }
}

//The workers
$workers = [
    ['Employee 1', 750, 35],
    ['Employee 2', 820, 47],
    ['Employee 3', 1000, 73]
];

whatToPay($workers);