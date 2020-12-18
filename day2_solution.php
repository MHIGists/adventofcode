<?php
$input = file_get_contents('input');
$inputArray = explode(PHP_EOL , $input);
$valid = 0;
foreach ($inputArray as $key => $value){
$inputArray[$key] = explode(' ',$value);
}
foreach ($inputArray as $key => $value){

    $minMax = explode('-', $value[0]);
    $min = $minMax[0];
    $max = $minMax[1];
    $searchedLetter = $value[1][0];
    $string = $value[2];

    $count = 0;
    $length = strlen($string);
    for ($k = 0; $k < $length; $k++){
        if ($searchedLetter == $string[$k]){
            $count++;
        }
    }
    if ($count >= $min && $count <= $max){
        $valid++;
    }
}
echo $valid;