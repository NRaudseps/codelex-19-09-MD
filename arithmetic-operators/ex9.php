<?php declare(strict_types=1);

//1 Pound = 0.453592kg OR 1kg = 2.20462 Pounds
//1 Inch = 2.54cm OR 1cm = 0.393701 Inches

function bmi(int $weight,int $height):string {
    $weight = $weight / 0.454;//Turns kg to pounds
    $height = $height / 2.54;//Turns cm to inches

    //BMI formula
    $bmi = round(($weight * 703)/($height**2), 2);
    //If underweight
    if($bmi < 18.5){
        return 'Your BMI is: ' . strval($bmi) . '. You are underweight' . PHP_EOL;
    }
    //If overweight
    elseif($bmi > 25){
        return 'Your BMI is: ' . strval($bmi) . '. You are overweight' . PHP_EOL;
    }
    //Normal weight
    else {
        return 'You BMI is: ' . strval($bmi) . PHP_EOL;
    }
}

//Weight kg, height cm
echo bmi(70, 180);