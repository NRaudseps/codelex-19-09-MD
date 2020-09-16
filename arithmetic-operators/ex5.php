<?php declare(strict_types=1);

echo "I'm thinking of a number between 1-100. Try to guess it." . "\n";
$num = (int) readline();//Input from user

function guessNumber (int $num):string {
    $pc = rand(1,100);//Random number the computer generates
    //Guess is too high
    if($num > $pc){
        return 'Sorry, you are too high. I was thinking of ' . strval($pc) . "\n";
    }
    //Guess is too low
    elseif ($num < $pc){
        return 'Sorry, you are too low. I was thinking of ' . strval($pc) . "\n";
    }
    //Guess is correct
    else {
        return 'You guessed it! What are the odds?!?' . "\n";
    }
}

echo guessNumber($num);
