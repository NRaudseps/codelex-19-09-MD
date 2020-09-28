<?php declare(strict_types=1);

echo 'Welcome to Piglet!' . PHP_EOL;

Piglet::game();

class Piglet
{
    public static function game(): void
    {
        //Dice roll
        $number = rand(2, 6); // Starts from 2 so it doesn't end prematurely
        //Counts the points from all the rolls
        $count = 0;

        //Continue till the game has finished
        while ($number !== 1) {

            echo 'You rolled a ' . strval($number) . '!' . PHP_EOL; //Tells them their dice roll number
            $choice = strtolower((string)readline('Roll again? ')); //Gives the player the choice to continue or not

            //It is a while loop because if the user wrote an incorrect value it must repeatedly ask for a correct one
            //do while because it has to start regardless of the first input
            do {
                switch ((string)$choice) {
                    case 'yes':
                    case 'y':
                        //If yes break out of the loop
                        break;
                    case 'no':
                    case 'n':
                        //If no end the game
                        $count += $number; //Add the remaining points
                        echo 'You got ' . strval($count) . ' points.' . PHP_EOL;
                        break;
                    default:
                        //If the user answered incorrectly then ask again for a new input while it is not yes or no
                        echo 'Not an option' . PHP_EOL;
                        $choice = strtolower((string)readline('Roll again? '));
                        break;
                }
            } while ($choice !== 'y' && $choice !== 'yes'); //If not an option repeat and ask again. If no then quit
            //I don't know why but it only works with && and not ||


            //Add number to the count
            $count += $number;

            //If not 1 randomize the number
            if ($number !== 1) {
                $number = rand(1, 6);
            }
            //If one than you lose and get 0 points
            if ($number === 1 && ($choice !== 'n' || $choice !== 'no')) {
                echo 'You rolled a 1 :(' . PHP_EOL;
                echo 'You got 0 points.' . PHP_EOL;
            }
        }
    }
}

