<?php declare(strict_types=1);

$combinations = [
    3 => 'Coza',
    5 => 'Loza',
    7 => 'Woza',
];


for((int) $i = 1; $i < 110; $i++){
    $output = '';
    foreach ($combinations as $index => $combination) {
        if($i % $index === 0){
            $output .= $combination;
        }
    }
    if($output === ''){
        $output = $i;
    }


    if($i % 11 === 0){
        echo $output . PHP_EOL;
    }
    else {
        echo strval($output) . ' ';
    }
}
//Šis kods man ļoti patīk