<?php declare(strict_types=1);

$input = (int) readline('Enter a number corresponding to a date: ');

//Checks for every int a day. 0-Sunday,1-Monday etc.
//I noticed what you did there. Very sneaky
switch ((int) $input){
    case 1:
        echo 'Monday';
        break;
    case 2:
        echo 'Tuesday';
        break;
    case 3:
        echo 'Wednesday';
        break;
    case 4:
        echo 'Thursday';
        break;
    case 5:
        echo 'Friday';//yey
        break;
    case 6:
        echo 'Saturday';
        break;
    case 0:
        echo 'Sunday';
        break;
    default:
        echo 'Not a valid day';
        break;
}
echo PHP_EOL;