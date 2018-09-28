<?php

$input = readline();

$arr = explode(" ", $input);
$result = "";
for ($i = 0; $i < count($arr); $i++){

    for ($b = 0; $b < strlen($arr[$i]); $b++){
        $result .= $arr[$i];
    }

}

echo $result;