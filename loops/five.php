<?php

echo 'Welcome to Piglet!' . PHP_EOL;

$number = rand(1,6);//Dice roll

Piglet::game($number);

class Piglet{
    public static function game($number) {
        $count = $number;
        while($number !== 1){
            echo 'You rolled a ' . strval($number) . '!' . PHP_EOL;
            $choice = strtolower(readline('Roll again? '));//Gives the player the choice to continue or not

            //Choice statement. If yes than break. If no give the point count
            //If no than number is 1 to end the while loop
            switch ($choice){
                case 'yes':
                case 'y':
                    break;
                case 'no':
                case 'n':
                    echo 'You got ' . strval($count) . ' points.' . PHP_EOL;
                    $number = 1;
                    break;
            }

            //If the player chooses to continue than roll the dice again
            if($number !== 1) {
                $number = rand(1, 6);
                $count += $number;
            }

            if($number === 1){
                echo 'You rolled a ' . strval($number) . ' :(' . PHP_EOL;
                echo 'You got ' . strval($count) . ' points.' . PHP_EOL;
            }
        }
    }
}

