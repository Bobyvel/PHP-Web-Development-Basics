<?php

$input = readline();
$phoneBook = [];
while ($input != "Over") {
    $tolkens = explode(" : ", $input);

    if (is_numeric($tolkens[0])):

        $phoneBook[$tolkens[1]] = $tolkens[0];

    else:
        $phoneBook[$tolkens[0]] = $tolkens[1];


    endif;


    $input = readline();
}

ksort($phoneBook);

foreach ($phoneBook as $key => $value) {
    echo $key." -> ".$value.PHP_EOL;
}