<?php

//1 Pound = 0.453592kg OR 1kg = 2.20462 Pounds
//1 Inch = 2.54cm OR 1cm = 0.393701 Inches

function bmi($weigth, $height){
    $weigth = $weigth / 0.454;
    $height = $height / 2.54;

    $bmi = round(($weigth * 703)/($height**2), 2);
    if($bmi < 18.5){
        return 'Your BMI is: ' . strval($bmi) . '. You are underweight' . PHP_EOL;
    }
    elseif($bmi > 25){
        return 'Your BMI is: ' . strval($bmi) . '. You are overweight' . PHP_EOL;
    }
    else {
        return 'You BMI is: ' . strval($bmi) . PHP_EOL;
    }
}

//weight kg, height cm
echo bmi(70, 180);