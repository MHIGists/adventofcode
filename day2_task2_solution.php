<?php
$input = file_get_contents('input');
$inputArray = explode(PHP_EOL , $input);
$valid = 0;
foreach ($inputArray as $key => $value){
$inputArray[$key] = explode(' ',$value);
}
foreach ($inputArray as $key => $value){
    $positions = explode('-', $value[0]);
    $firstPos = $positions[0];
    $secondPos = $positions[1];
    $searchedLetter = $value[1][0];
    $string = $value[2];

    $count = 0;
    if ($searchedLetter == $string[$firstPos - 1]){
        $count++;
    }
    if ($searchedLetter == $string[$secondPos - 1]){
        $count++;
    }
    if ($count == 1){
        $valid++;
    }
}
echo $valid;