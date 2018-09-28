<?php

$arr = explode(" ", readline());

$countNumber = [];

for ($i = 0; $i < count($arr); $i++) {

    $num = $arr[$i]. "";

    if (!array_key_exists($num, $countNumber)) {
        $countNumber[$num] = 1;
    } else {
        $countNumber[$num]++;
    }
}
ksort($countNumber);
foreach ($countNumber as $key=>$value){
    echo $key." -> ".$value.PHP_EOL;
}



