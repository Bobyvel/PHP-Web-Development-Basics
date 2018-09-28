<?php

$input = readline();

$map = [];

for ($i = 0; $i < strlen($input); $i++){

    if (!array_key_exists($input[$i], $map)){
        $map[$input[$i]] = 1;
    }else{
        $map[$input[$i]]++;
    }
}

foreach ($map as $key => $value){
    echo $key." -> ".$value.PHP_EOL;
}