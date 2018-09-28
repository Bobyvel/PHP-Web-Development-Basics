<?php

$input = explode(", ", readline());

$map = [];
for ($i = 0; $i < count($input); $i+=2){

    if (!array_key_exists($input[$i], $map)):
        $map[$input[$i]] = $input[$i+1];
    else:
        $map[$input[$i]] += $input[$i+1];
    endif;
}

foreach ($map as $key=>$value){
    echo "$key => $value".PHP_EOL;
}