<?php declare(strict_types=1);

//This class plays the game
class RollTwoDice
{
    public static function game(int $number): bool
    {
        //If the input is not a integer or is not possible to roll such a sum then quit
        if ($number > 12 || $number < 2 || gettype($number) !== 'integer') {
            echo 'Not a correct value' . PHP_EOL;
            //Return false to quit the method
            //Otherwise there will be a infinite loop
            return false;
        }
        //Two random numbers;
        $numOne = 0;
        $numTwo = 0;
        //While not desired sum try again
        while (($numOne + $numTwo) !== $number) {
            //Randomize the numbers
            $numOne = Random::randomNumber();
            $numTwo = Random::randomNumber();
            //Print x + y = x+y
            echo strval($numOne) . ' and ' . strval($numTwo) . ' = ' . strval($numOne + $numTwo) . PHP_EOL;
        }

        return true;
    }
}

//Returns random something
class Random
{
    //In this case a random number
    public static function randomNumber(): int
    {
        return rand(1, 6);
    }
}

//Inputs the desired sum
$input = (int)readline('Desired Sum: ');
RollTwoDice::game($input); //The computer now plays the game