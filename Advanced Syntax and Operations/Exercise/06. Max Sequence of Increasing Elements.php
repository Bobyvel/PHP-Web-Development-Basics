<?php

$arr = explode(" ", readline());
$start = 0;
$max = 0;
$count = 0;
$hasResult = false;
for ($i = 0; $i < count($arr)-1; $i++) {

    if ($arr[$i] < $arr[$i + 1]) {
        $count++;

        if ($count > $max):
            $start = $i - $count;
            $max = $count;
            $hasResult = true;
        endif;
    } else {
        $count = 0;

    }
}
if ($hasResult) {
    for ($i = $start + 1; $i <= $start + $max + 1; $i++) {
        echo $arr[$i] . " ";
    }
}else {
    echo $arr[0];
}

