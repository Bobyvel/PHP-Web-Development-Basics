<?php

$input = explode(", ", readline());

$map = [];
for ($i = 0; $i < count($input); $i++){

    if (!array_key_exists($input[$i], $map)):
        $map[$input[$i]] = 1;
    else:
        $map[$input[$i]] ++;
    endif;
}

foreach ($map as $key=>$value){
    if ($value == 1):
    echo "$key"." ";
    endif;
}