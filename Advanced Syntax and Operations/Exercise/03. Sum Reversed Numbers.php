<?php

$input = explode(" ", readline());
$sum = 0;
foreach ($input as $value){

    $num = strrev($value);
    $sum += intval($num);
}

echo $sum;