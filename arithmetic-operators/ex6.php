<?php declare(strict_types=1);

//If number is divisible by any of these array keys
//Add the value of the key to the output string.
$combinations = [
    3 => 'Coza',
    5 => 'Loza',
    7 => 'Woza',
];


for((int) $i = 1; $i <= 110; $i++){
    $output = '';//Output String
    //If divisible by combination add to string
    foreach ($combinations as $index => $combination) {
        if($i % $index === 0){
            $output .= $combination;
        }
    }
    //If not then output the number
    if($output === ''){
        $output = $i;
    }

    //If number is divisible by 11, echo output and then start a new line
    if($i % 11 === 0){
        echo $output . PHP_EOL;
    }
    //Else just echo output
    else {
        echo $output . ' ';
    }
}