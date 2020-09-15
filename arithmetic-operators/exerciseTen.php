<?php declare(strict_types=1);

class Geometry {
    public static function circleArea($radius) {
        if($radius > 0){
            return round(M_PI*$radius*2, 2) . PHP_EOL;
        }
        else{
            throw new Error('No negative values allowed');
        }
    }

    public static function rectArea($length, $width) {
        if($width > 0 && $length > 0){
            return $length*$width . PHP_EOL;
        }
        else {
            throw new Error('No negative values allowed');
        }
    }

    public static function triangleArea($base,$height) {
        if($base > 0 && $height > 0){
            return $base*$height*0.5 . PHP_EOL;
        }
        else {
            throw new Error('No negative values allowed');
        }
    }
}

echo 'Geometry Calculator:' . PHP_EOL . PHP_EOL;
echo 'Calculate the Area of a Circle' . PHP_EOL;
echo 'Calculate the Area of a Rectangle' . PHP_EOL;
echo 'Calculate the Area of a Triangle' . PHP_EOL;
echo 'Quit' . PHP_EOL;
$choice = readline('Enter your choice (1-4): ');
echo input($choice);

function input($choice){
    switch ($choice){
        case 1:
            $radius = readline('What is the radius? ');
            return Geometry::circleArea($radius);
        case 2:
            $length = readline('What is the length? ');
            $width = readline('What is the width? ');
            return Geometry::rectArea($length, $width);
        case 3:
            $base = readline('What is the base? ');
            $height = readline('What is the height? ');
            return Geometry::triangleArea($base, $height);
        case 4:
            echo 'Goodbye' . PHP_EOL;
            break;
        default:
            echo 'There is no such option' . PHP_EOL;
            break;
    }
}