<?php

$arr = explode(" ", readline());
$n = intval(readline());
$summedArr = [];

for ($i = 0; $i < $n; $i++){

    $element = array_pop($arr);
    array_unshift($arr, $element);


    for ($j = 0; $j < count($arr); $j++){

        $summedArr[$j] += $arr[$j];
    }

}

echo implode(" ", $summedArr);