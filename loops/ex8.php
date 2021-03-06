<?php declare(strict_types=1);

class NumberSquare
{
    //Method which draws the number square
    public static function square(int $min, int $max): bool
    {
        //Checks for bugs
        //Turns both to strings so then can complete the regex expression
        if (static::bugChecker(strval($min), strval($max))) {
            return false;
        }

        //These are the numbers that will be displayed
        $tempMax = $max;//The number to the left
        $tempMin = $min;//The number to the right

        //Print $max of rows
        for ($i = 0; $i < $max; $i++) {
            //Start every row with the previous $min and add 1(unless it is at the start)
            for ($j = $tempMin; $j <= $tempMax; $j++) {
                //If larger than $max start from min
                if ($j > $max) {
                    echo $j - $max;
                } //Else just print the number
                else {
                    echo $j;
                }
            }
            //Add one to every row
            $tempMax++;
            $tempMin++;
            echo PHP_EOL; // Start a new line on the next row
        }
        return true;
    }

    //Checks for bugs
    public static function bugChecker(string $min, string $max):bool
    {
        //Is the number smaller than 0
        if ($min < 0 || $max < 0) {
            echo 'The numbers are too small.' . PHP_EOL;

            return true;
        }
        //Is this number actually an integer
        if (!preg_match('/[1-9]/', $min) || !preg_match('/[1-9]/', $max)) {
            echo 'You have not put in actual integers.' . PHP_EOL;

            return true;
        }

        return false;
    }
}

//Input min and max
$min = (int) readline('Min? ');
$max = (int) readline('Max? ');

//Execute the square
NumberSquare::square($min, $max);
