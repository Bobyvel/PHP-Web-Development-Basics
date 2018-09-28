<?php

$num1 = intval(readline());
$num2 = intval(readline());
$max = max($num1, $num2);
$min = min($num1, $num2);

for ($i = $min; $i <= $max; $i++){
    print $i."\n";
}