<?php

$arr = explode(" ", readline());


foreach ($arr as $val){

    printf($val." => ".round($val, 0,PHP_ROUND_HALF_UP).PHP_EOL);
}