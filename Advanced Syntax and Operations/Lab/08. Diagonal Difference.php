<?php

$sizeMatrix = intval(readline());

$matrix = [];
for ($i = 0; $i < $sizeMatrix; $i++) {

    $matrix[$i] = array_map('intval',explode(" ", readline()));

}

$mainSum = 0;
$secondarySum = 0;

for ($row = 0; $row < count($matrix); $row++) {

    $mainSum += $matrix[$row][$row];
    $secondarySum += $matrix[$row][count($matrix)-$row-1];
}

echo abs($mainSum - $secondarySum);
