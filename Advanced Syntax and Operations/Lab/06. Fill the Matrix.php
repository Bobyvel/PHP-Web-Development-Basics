<?php

$input = explode(", ", readline());
$sizeMatrix = intval($input[0]);
$pattern = $input[1];
$counter = 1;

$matrix = [$sizeMatrix][$sizeMatrix];

if ($pattern == "A"){
    for ($p = 0; $p < $sizeMatrix; $p++) {

        for ($i = 0; $i < $sizeMatrix; $i++) {

            $matrix[$i][$p] = $counter++;
        }
    }

}elseif ($pattern == "B"){
    for ($p = 0; $p < $sizeMatrix; $p++) {

        if ($p % 2 == 0){
        for ($i = 0; $i < $sizeMatrix; $i++) {

            $matrix[$i][$p] = $counter++;
        }
        }else{
            for ($i = $sizeMatrix - 1; $i >= 0; $i--) {

                $matrix[$i][$p] = $counter++;
            }
        }
    }
}


//print

for ($row = 0; $row < $sizeMatrix; $row++) {
    for ($col = 0; $col < $sizeMatrix; $col++) {
        echo $matrix[$row][$col]." ";
    }
    echo PHP_EOL;
}
