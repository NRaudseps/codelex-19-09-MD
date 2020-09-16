<?php declare(strict_types=1);

//Returns string 'true' or 'false' so that it will be understandable for the user
//But if necessary than you can uncomment out
function iLike15 (int $a, int $b): string{
    //Although the if statement is rather long
    //Since it only returns true it is more convenient to put it in one statement
    if($a === 15 || $b === 15 || $a + $b === 15 || abs($a-$b) === 15) {
        return 'true' . PHP_EOL;
        //return true;
    }
    else {
        return 'false' . PHP_EOL;
        //return false;
    }
}
echo iLike15(17, 2);