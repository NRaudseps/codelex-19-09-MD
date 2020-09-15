<?php

//This class plays the game
class RollTwoDice {
    public static function game($number) {
        //If the input is not a integer or is not possible to roll such a sum then quit
        if($number > 12 || $number < 2 || gettype($number) !== 'integer'){
            echo 'Not a correct value' . PHP_EOL;
            return false;
        }
        //Two random numbers;
        $numOne = 0;
        $numTwo = 0;
        //While not desired sum continue
        while(($numOne + $numTwo) !== $number){
            //Randomize the numbers
            $numOne = Random::randomNumber();
            $numTwo = Random::randomNumber();
            //print x + y = x+y
            echo strval($numOne) . ' and ' . strval($numTwo) . ' = ' . strval($numOne+$numTwo) . PHP_EOL;
        }
    }
}

//Returns random something
class Random {
    //In this case a random number
    public static function randomNumber(){
        return rand(1,6);
    }
}

//inputs the desired sum
$input = readline('Desired Sum: ');
RollTwoDice::game(intval($input)); //turns the input from a string to an int then the computer guesses