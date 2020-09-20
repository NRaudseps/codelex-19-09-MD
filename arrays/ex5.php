<?php declare(strict_types=1);

//Stores the placing of all X's and O's in a 2D array
$placing = [
    [
        0 => ' ',
        1 => ' ',
        2 => ' ',
    ],
    [
        0 => ' ',
        1 => ' ',
        2 => ' ',
    ],
    [
        0 => ' ',
        1 => ' ',
        2 => ' ',
    ],
];
//All possible combinations to win. If a player matches any of the placings of the
//array he or she wins
$combinations = [
    [[0,0], [0,1], [0,2]],
    [[1,0], [1,1], [1,2]],
    [[2,0], [2,1], [2,2]],
    [[0,0], [1,0], [2,0]],
    [[0,1], [1,1], [2,1]],
    [[0,2], [1,2], [2,2]],
    [[0,0], [1,1], [2,2]],
    [[0,2], [1,1], [2,0]]
];


$i = 0;//Move Count
//$player is the one who is making the move(either X or O)
$player = 'X';//X always starts
//Only 9 moves possible in the game
while($i < 9){
    //Every round display the board
    display_board($placing);

    //Inputs the coordinates from the player
    $input = readline($player . ', choose your location (row, column): ');
    //Converts it to a number for the computer to use
    $number = explode(' ', $input);

    //All in one catcher for incorrect moves (such as there is already a player there, not a coordinate etc.)
    if($placing[$number[0]][$number[1]] !== ' '){
        echo "You can't place there!" . PHP_EOL;
        continue;//If yes then start all over
    }
    //If it is a valid move than change coordinate for the corresponding player
    $placing[$number[0]][$number[1]] = $player;

    $i++;//Next Move
    //Check to see if anybody has won
    if(checkWinner($placing, $combinations, $player)){
        echo $player . ' has won!' . PHP_EOL;
        break;//If yes break from the while loop
    }
    //If there have been 9 moves made and there is no winner than it is a tie
    if($i === 9 && !checkWinner($placing, $combinations, $player)){
        echo 'The game is a tie!' . PHP_EOL;
    }
    //Change the player
    $player = $player === 'X' ? 'O' : 'X';
}
//Display the board one last time for the players to see
display_board($placing);

//Displays the board. Gets the value from the placing array
function display_board(array $placing): void
{
    echo " " . $placing[0][0] . " | " . $placing[0][1] . " | " . $placing[0][2] . "   \n";
    echo "---+---+---\n";
    echo " " . $placing[1][0] . " | " . $placing[1][1] . " | " . $placing[1][2] . "   \n";
    echo "---+---+---\n";
    echo " " . $placing[2][0] . " | " . $placing[2][1] . " | " . $placing[2][2] . "   \n";
}

//Checks to see if there is a winner
function checkWinner(array $placing, array $combinations, string $player):bool{
    //Goes through all the possible win combinations
    //If one of them is filled with either X or O then the player has won
    foreach ($combinations as $combination) {
        if($placing[$combination[0][0]][$combination[0][1]] === $player
            && $placing[$combination[1][0]][$combination[1][1]] === $player
            && $placing[$combination[2][0]][$combination[2][1]] === $player) {
            return true;
        }
    }
    return false;
}