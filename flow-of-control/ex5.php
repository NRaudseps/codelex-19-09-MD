<?php declare(strict_types=1);

$input = (string) readline('Input a string that will be turned to numbers: ');
//Array of letters that will be turned into numbers
$letters = str_split(strtolower($input));

//The generated numbers will get stored here
$numbers = [];
foreach ((array) $letters as $letter) {
    switch ((string) $letter){
        case 'a':
        case 'b':
        case 'c':
            array_push($numbers, 2);
            break;
        case 'd':
        case 'e':
        case 'f':
            array_push($numbers, 3);
            break;
        case 'g':
        case 'h':
        case 'i':
            array_push($numbers, 4);
            break;
        case 'j':
        case 'k':
        case 'l':
            array_push($numbers, 5);
            break;
        case 'm':
        case 'n':
        case 'o':
            array_push($numbers, 6);
            break;
        case 'p':
        case 'q':
        case 'r':
        case 's':
            array_push($numbers, 7);
            break;
        case 't':
        case 'u':
        case 'v':
            array_push($numbers, 8);
            break;
        case 'w':
        case 'x':
        case 'y':
        case 'z':
            array_push($numbers, 9);
            break;
    }
}
//ABC(2), DEF(3), GHI(4), JKL(5), MNO(6), PQRS(7), TUV(8), WXYZ(9).
echo implode('', $numbers) . PHP_EOL;//Output as a string