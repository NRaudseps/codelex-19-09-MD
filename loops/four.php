<?php

$combinations = [
    3 => 'Fizz',
    5 => 'Buzz',
];
$input = readline('How many terms do you want: ');

FizzBuzz::output($combinations, $input);

class FizzBuzz {
    public static function output($combinations, $input) {
        for($i = 1; $i < $input+1; $i++){
            $output = '';
            foreach ($combinations as $index => $combination) {
                if($i % $index === 0){
                    $output .= $combination;
                }
            }
            if($output === ''){
                $output = $i;
            }


            if($i % 20 === 0){
                echo $output . PHP_EOL;
            }
            else {
                echo strval($output) . ' ';
            }
        }
    }
}