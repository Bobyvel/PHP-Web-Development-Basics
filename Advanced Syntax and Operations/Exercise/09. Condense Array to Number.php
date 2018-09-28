<?php

$arr = explode(" ", readline());
$temp = [];
while (count($arr) != 1){
    for ($i = 0; $i < count($arr) - 1; $i++){

        $sum = $arr[$i] + $arr[$i + 1];
        $temp[$i] = $sum;


    }

    unset($arr);
    $arr = $temp;
    unset($temp);
}

echo $arr[0];