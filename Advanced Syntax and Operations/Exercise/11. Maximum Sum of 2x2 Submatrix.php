<?php

$input = explode(", ", readline());
$rows = intval($input[0]);
$cols = intval($input[1]);
$sumMatrix = [];
$matrix = [];
$result = 0;
for ($i = 0; $i < $rows; $i++){

    $matrix[$i] = explode(", ", readline());
}

$sum = 0;
$rolIndex = 0;
$collIndex = 0;
for ($i = 0; $i < $rows -1; $i++) {
    for ($j = 0; $j < $cols - 1; $j++) {


        $sum = $matrix[$i][$j] + $matrix[$i][$j + 1] + $matrix[$i+1][$j] + $matrix[$i + 1][$j+1];

        if ($sum > $result):
            $result = $sum;
        $rolIndex = $i;
        $collIndex = $j;
            endif;
    }
}

echo $matrix[$rolIndex][$collIndex]." ".$matrix[$rolIndex][$collIndex +1].PHP_EOL;
echo $matrix[$rolIndex+1][$collIndex]." ".$matrix[$rolIndex +1][$collIndex+1].PHP_EOL;
echo $result;