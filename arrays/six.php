<?php

//List of Words
$words = ['dog', 'cat', 'banana', 'hangman', 'rectangle', 'apple', 'station', 'car', 'building', 'television'];
//Chooses one word of the above list
$word = strtolower($words[rand(1,count($words)-1)]);
$guessNumber = 10; //Number of guesses

//Stores the correctly guessed letters in this array.
//But at the start it is empty with a count of _ equal to the count of letters in the chosen word
$letters = [];
for($i = 0; $i < strlen($word); $i++){
    $letters[] = '_';
}

//$i is the amount of guesses
$i = 0;
$misses = '';//A string where all the incorrect guesses are stored and will be displayed. For now empty
$guess = '';//The guess char the player makes. For now empty
echo 'You only have ' . strval($guessNumber) . ' guesses.' . PHP_EOL;

while($i < $guessNumber){
    //If a guess corresponds to a letter of the word than that letter gets stored in $letters
    $letters = drawWord($word, $guess,$letters);
    $gameWord = implode(' ', $letters);//The thing that gets displayed on the screen
    drawGrid($misses, $gameWord);//Draws everything
    //Win condition. If no empty spaces than all the letters have been guesses
    if(!in_array('_', $letters)){
        echo 'You have won!' . PHP_EOL;
        break; //break out of the while loop.
    }
    $guess = strtolower(readline('Guess: '));//The part where the player enters their guess
    echo PHP_EOL;

    //Exception Cases
    //If the guess is longer than one char
    if(strlen($guess) !== 1){
        $i--;//so that mistake doesnt count as a move
        echo 'Only one character allowed.' . PHP_EOL;
    }
    //if the guess is not alphabetical
    elseif(!preg_match('/[a-zA-Z]/', $guess)){
        $i--;
        echo 'Only alphabetical characters allowed' . PHP_EOL;
    }
    //If the guess has already been guessed correctly
    elseif(in_array($guess, $letters)){
        $i--;
        echo 'You have already guessed that' . PHP_EOL;
    }
    //If the guess is not in the word
    //It is an elseif to the other exceptions so as to not add errors in the misses string
    elseif(!in_array($guess, str_split($word))){
        //Has the guess already been made.
        if(in_array($guess, str_split($misses))){
            $i--;
            echo 'You have already guessed that' . PHP_EOL;
        }
        //Else add to the misses
        else {
            $misses .= $guess;
        }
    }

    $i++;
    //If run out of moves than quit
    if($i === $guessNumber){
        echo 'You have run out of moves' . PHP_EOL;
    }
}

//Draws the word that will be displayed
function drawWord($word, $guess, $letters){
    for($i = 0; $i < strlen($word); $i++){ //Go through all the letters of the word
        if($word[$i] === $guess){ //If the guess corresponds to the letter of the word
            $letters[$i] = $guess;//Add it in to the letters array for storing
        }
    }
    return $letters;
}

//Draws everything
function drawGrid ($misses, $gameWord){
    echo '-=-=-=-=-=-=-=-=-=-=-=-=-=-' . PHP_EOL; //Nice little border
    echo PHP_EOL;
    echo 'Word: ' . $gameWord . PHP_EOL;//Draws the word that is being guessed
    echo PHP_EOL;
    echo 'Misses: ' . $misses . PHP_EOL;//Draws the misses
    echo PHP_EOL;
}
