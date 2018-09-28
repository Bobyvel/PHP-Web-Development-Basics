<?php

$n = intval(readline());
$arr = [];
for ($i = 0; $i < $n; $i++){
array_push($arr, intval(readline()));
}

echo implode(" ", array_reverse($arr));