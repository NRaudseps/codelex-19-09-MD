<?php declare(strict_types=1);

echo 'Welcome to Piglet!' . PHP_EOL;

//Dice roll. This will start at 2 so the game will never end prematurely
$number = rand(2, 6);

Piglet::game($number);

class Piglet
{
    public static function game(int $number): void
    {
        //Number of points. At the start it is the roll of the first die
        $count = $number;
        while ($number !== 1) {
            echo 'You rolled a ' . strval($number) . '!' . PHP_EOL;
            $choice = strtolower(readline('Roll again? '));//Gives the player the choice to continue or not

            //If not 1 randomize the number
            if ($number !== 1) {
                $number = rand(1, 6);
            }
            //If one than you lose and get 0 points
            if ($number === 1) {
                echo 'You rolled a 1 :(' . PHP_EOL;
                echo 'You got 0 points.' . PHP_EOL;
            }

            //Choice statement. If yes than break. If no give the point count
            //If no than number is 1 to end the while loop
            switch ((string)$choice) {
                case 'yes':
                case 'y':
                    //Add the count here since the number has already been randomized
                    $count += $number;
                    break;
                case 'no':
                case 'n':
                    echo 'You got ' . strval($count) . ' points.' . PHP_EOL;
                    $number = 1;
                    break;
            }
        }
    }
}

