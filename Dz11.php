<?php
$input = '501228412';           // +380 12 345 67 89
$input = trim($input);
$countryCode = '380';
$countryCodeInput = substr($input,0,3);
$inputLenght = strlen($input);

if($inputLenght <= 9){

    $firstPart = substr($input, 0,2);
    $firstPart1 = ' ('. $firstPart . ') ';
    $secondPart = substr($input, 2,3);
    $thirdPart = substr($input,5,2);
    $fourPart = substr($input, 7,2);
    $output = '+' . $countryCode . $firstPart1 . $secondPart . '-' . $thirdPart. '-' .$fourPart;
    echo $output;

    } elseif ($inputLenght === 12 && $countryCode === $countryCodeInput ){
    $firstPart1 = substr($input, 3,2);
    $firstPart2 = ' ('. $firstPart1 . ') ';
    $secondPart1 = substr($input, 5,3);
    $thirdPart1 = substr($input,8,2);
    $fourPart1 = substr($input, 10,2);
    $output = '+' . $countryCode . $firstPart2 . $secondPart1 . '-' . $thirdPart1. '-' .$fourPart1;
    echo $output;

} else {
    echo 'ERROR. Enter the correct phone number';
    exit;
}


