<?php

$n = intval(readline());
$sum = 0;


    for ($i = 1;; $i += 2) {

        echo $i . "\n";
        $sum += $i;
        $n--;

        if ($n == 0){
            break;
        }


}
echo "Sum: ".$sum;