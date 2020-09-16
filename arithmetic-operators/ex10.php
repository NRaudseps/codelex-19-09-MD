<?php declare(strict_types=1);

class Geometry {
    //Calculates Circle Area
    public static function circleArea(int $radius):string {
        if($radius > 0){
            //This formula isn't correct, but hey you have to follow instructions
            return round(M_PI*$radius*2, 2) . PHP_EOL;
        }
        //Throw new error for negative values
        else{
            throw new Error('No negative values allowed');
        }
    }
    //Calculates Area of a rectangle
    public static function rectArea(int $length,int $width):string {
        if($width > 0 && $length > 0){
            return $length*$width . PHP_EOL;
        }
        else {
            throw new Error('No negative values allowed');
        }
    }
    //Calculates area of triangle
    public static function triangleArea(int $base,int $height):string {
        if($base > 0 && $height > 0){
            return $base*$height*0.5 . PHP_EOL;
        }
        else {
            throw new Error('No negative values allowed');
        }
    }
}
//Gives the user the a choice
echo 'Geometry Calculator:' . PHP_EOL . PHP_EOL;
echo 'Calculate the Area of a Circle' . PHP_EOL;
echo 'Calculate the Area of a Rectangle' . PHP_EOL;
echo 'Calculate the Area of a Triangle' . PHP_EOL;
echo 'Quit' . PHP_EOL;
$choice = (int) readline('Enter your choice (1-4): ');
echo input($choice);

function input(int $choice):string{
    switch ($choice){
        //Circle Area option
        case 1:
            $radius = (int) readline('What is the radius? ');
            return Geometry::circleArea($radius);
        //Rectangle Area option
        case 2:
            $length = (int) readline('What is the length? ');
            $width = (int) readline('What is the width? ');
            return Geometry::rectArea($length, $width);
        //Triangle Area option
        case 3:
            $base = (int) readline('What is the base? ');
            $height = (int) readline('What is the height? ');
            return Geometry::triangleArea($base, $height);
        //Quit option
        case 4:
            echo 'Goodbye' . PHP_EOL;
            break;
        //Error if $choice is out of bounds
        default:
            echo 'There is no such option' . PHP_EOL;
            break;
    }
    //Since I have to return a string, and there are switch cases where no return is given
    //I simply add an empty string to be returned
    return '';
}