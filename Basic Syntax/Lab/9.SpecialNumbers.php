<?php

$n = intval(readline());

for($i = 1; $i <= $n; $i++) {
    $sum = 0;
    $num = $i;
    while ($num != 0) {

        $digit = $num % 10;
        $sum += $digit;
        $num /= 10;

    }

    if ($sum == 5 || $sum == 7 || $sum == 11){
        echo $i." -> True\n";
    }else{
        echo $i." -> False\n";
    }
}