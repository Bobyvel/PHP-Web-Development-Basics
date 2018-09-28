<?php

$arr1 = explode(" ", readline());
$arr2 = explode(" ", readline());

$sumArr = [];

$maxLen = max(count($arr1), count($arr2));

for ($i = 0; $i < $maxLen; $i++){
    $sum = $arr1[$i % count($arr1)] + $arr2[$i % count($arr2)];
    array_push($sumArr, $sum);
}

echo implode(" ", $sumArr);

