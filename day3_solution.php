<?php
$input = file_get_contents('input3');
$inputArray = explode(PHP_EOL, $input);
$x = 0;
$hitCount = 0;

foreach ($inputArray as $key => $row) {
    $count = 0;
    while ($count < 360) {
        $inputArray[$key] .= $row;
        $count++;
    }
}
foreach ($inputArray as $key => $row) {

    if ($inputArray[$key + 1][$x + 3] === '#') {
        $hitCount++;
    }
    $x += 3;

}
echo $hitCount;


