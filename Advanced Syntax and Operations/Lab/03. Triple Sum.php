<?php

$arr = explode(" ", readline());
$hasSuch = false;


    for ($p = 0; $p < count($arr); $p++) {
        for ($m = 0; $m < count($arr); $m++) {
            for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$p] + $arr[$m] == $arr[$i] && $p< $m) {
                printf("{$arr[$p]} + {$arr[$m]} == {$arr[$i]}\n");
                $hasSuch = true;
            }
        }
    }
}

if (!$hasSuch):
    echo "No";
endif;