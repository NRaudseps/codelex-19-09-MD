<?php declare(strict_types=1);

echo "I'm thinking of a number between 1-100. Try to guess it." . "\n";
$num = (int) readline();

function guessNumber (int $num):string {
    $pc = rand(1,100);
    if($num > $pc){
        return 'Sorry, you are too high. I was thinking of ' . strval($pc) . "\n";
    }
    elseif ($num < $pc){
        return 'Sorry, you are too low. I was thinking of ' . strval($pc) . "\n";
    }
    else {
        return 'You guessed it! What are the odds?!?' . "\n";
    }
}

echo guessNumber($num);
