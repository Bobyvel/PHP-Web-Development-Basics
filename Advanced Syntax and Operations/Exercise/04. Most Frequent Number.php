<?php

$arr = explode(" ", readline());
$num = 0;
$frequency = 0;

for ($i = 0; $i < count($arr); $i++) {
    $counter = 0;
    for ($j = 0; $j < count($arr); $j++) {

        if ($arr[$i] == $arr[$j]) {
            $counter++;
            if ($counter > $frequency):
                $num = $arr[$i];
                $frequency = $counter;
            endif;
        }
    }
}

echo $num;