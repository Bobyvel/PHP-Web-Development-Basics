<?php

$input = explode(", ", readline());
$rows = intval($input[0]);
$cols = intval($input[1]);
$sumMatrix = 0;
$matrix = [];

for ($i = 0; $i < $rows; $i++){

    $matrix[$i] = explode(", ", readline());
}

foreach ($matrix as $row){
    foreach ($row as $coll) {

    $sumMatrix += intval($coll);

    }
}

echo $rows.PHP_EOL.$cols.PHP_EOL.$sumMatrix;






