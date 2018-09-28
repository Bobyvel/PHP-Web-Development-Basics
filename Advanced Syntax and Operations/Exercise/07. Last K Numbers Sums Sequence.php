<?php


$n = intval(readline());
$k = intval(readline());
$arr = [1];


for ($i = 1; $i < $n; $i++) {
    $sum = 0;
    $startIndex = max(0, $i - $k);

    for ($j = $startIndex; $j < $i; $j++) {
        $sum += $arr[$j];
    }

    $arr[$i] = $sum;
}

echo implode(" ", $arr);

