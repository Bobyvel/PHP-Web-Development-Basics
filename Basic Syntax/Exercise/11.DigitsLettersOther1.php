<?php

$str = readline();

$digits = "";
$letters = "";
$other = "";
for ($i = 0; $i < strlen($str); $i++){


    if (is_numeric($str[$i])){
        $digits .= $str[$i];
    }elseif (ctype_alpha($str[$i])){
        $letters .= $str[$i];
    }else{
        $other .= $str[$i];
    }
}

echo $digits."\n";
echo $letters."\n";
echo $other;