<?php

$n = intval(readline());
$hasResult = false;
$arr = [];
for ($i = 1; $i <= 9; $i++){
    for ($m = 0; $m <= 9; $m++){
        for ($p = 0; $p <= 9; $p++){

            if ($i != $m && $m != $p && $i != $p){
                $number = 0;
                $number = $i*100 + $m*10 + $p;
                if ($number <= $n){
                    array_push($arr, $number);
                    $hasResult = true;
                }
            }
        }
    }
}

if (!$hasResult){
    echo "no";
}else{
    printf(implode(", ", $arr));
}