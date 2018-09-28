<?php

$input = explode(", ", readline());

$rowSize = intval($input[0]);
$colSize = intval($input[1]);

$matrix = [];
for ($i = 0; $i < $rowSize; $i++) {

    $matrix[$i] = array_map('intval',explode(", ", readline()));

}

$minNum = PHP_INT_MAX;
$maxNum = PHP_INT_MIN;
for ($row = 0; $row < $rowSize; $row++) {
    for ($col = 0; $col < $colSize; $col++) {

        if ($matrix[$row][$col] < $minNum){
            $minNum = $matrix[$row][$col];
        }
        if ($matrix[$row][$col] > $maxNum){
            $maxNum = $matrix[$row][$col];
        }
    }

}

echo "Min: $minNum".PHP_EOL."Max: $maxNum";

