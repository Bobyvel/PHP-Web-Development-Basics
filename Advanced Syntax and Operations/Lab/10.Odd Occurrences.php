<?php

$input = explode(" ", readline());

$map = [];
$result = [];
for ($i = 0; $i < count($input); $i++){

    $str = strtolower($input[$i]);
    if (!array_key_exists($str, $map)){
        $map[$str] = 1;
    }else{
        $map[$str]++;
    }
}

foreach ($map as $key => $value){
    if ($value % 2 == 1){
        array_push($result, $key);
    }
}

echo implode(", ", $result);

