<?php declare(strict_types=1);

//Method: If the number divides by a key in this array
//Add to the output string the value of the associated key
$combinations = [
    3 => 'Fizz',
    5 => 'Buzz',
];
$input = (int)readline('How many terms do you want: ');

FizzBuzz::output($combinations, $input);

class FizzBuzz
{
    public static function output(array $combinations, int $input): string
    {
        //Go through all the numbers starting from one
        for ($i = 1; $i < $input + 1; $i++) {
            //The output string that will be displayed
            $output = '';
            //Does $i divide by one of the combination keys evenly
            foreach ($combinations as $index => $combination) {
                if ($i % $index === 0) {
                    //If so add it to the output string
                    $output .= $combination;
                }
            }
            //If $i didn't divide evenly by any of the keys
            //Then than means that $output is still empty
            if ($output === '') {
                //Add the number
                $output = $i;
            }

            //For every 20 numbers start echoing on a new line
            if ($i % 20 === 0) {
                echo $output . PHP_EOL;
            } //Else add a space between outputs
            else {
                echo strval($output) . ' ';
            }
        }
    }
}