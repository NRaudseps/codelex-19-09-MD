<?php

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


$i = 0;
$player = 'X';
while($i < 9){
    if(checkWinner($placing, $combinations, $player)){
        echo $player . ' has won!' . PHP_EOL;
        break;
    }
    var_dump($placing[0], checkWinner($placing, $combinations, $player));
    display_board($placing);


    $input = readline($player . ', choose your location (row, column): ');
    $number = explode(' ', $input);
    if($i % 2 === 0 && $placing[$number[0]][$number[1]] === ' '){
        $placing[$number[0]][$number[1]] = 'X';
        $player = 'O';
    }
    elseif ($i % 2 !== 0 && $placing[$number[0]][$number[1]] === ' ') {
        $placing[$number[0]][$number[1]] = 'O';
        $player = 'X';
    }
    else {
        echo "You can't place there" . PHP_EOL;
        $i--;
    }

    $i++;

    if($i === 9){
        echo 'The game is a tie!' . PHP_EOL;
        display_board($placing);
    }
}

function display_board($placing)
{
    echo " " . $placing[0][0] . " | " . $placing[0][1] . " | " . $placing[0][2] . "   \n";
    echo "---+---+---\n";
    echo " " . $placing[1][0] . " | " . $placing[1][1] . " | " . $placing[1][2] . "   \n";
    echo "---+---+---\n";
    echo " " . $placing[2][0] . " | " . $placing[2][1] . " | " . $placing[2][2] . "   \n";
}

function checkWinner($placing, $combinations, $player){
    foreach ($combinations as $combination) {
        var_dump(1, $placing[$combination[0][0]][$combination[0][1]]);
        var_dump($placing[$combination[1][0]][$combination[1][1]]);
        var_dump($placing[$combination[2][0]][$combination[2][1]]);
        if($placing[$combination[0][0]][$combination[0][1]] === $player
            && $placing[$combination[1][0]][$combination[1][1]] === $player
            && $placing[$combination[2][0]][$combination[2][1]] === $player) {
            return true;
        }
    }
}