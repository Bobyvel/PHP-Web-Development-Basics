<?php

$alphas = range('a', 'z');

$input = strtolower(readline());

for ($i = 0; $i < strlen($input); $i++){

    $pos = array_search($input[$i], $alphas);
    echo "$input[$i] -> $pos".PHP_EOL;
}