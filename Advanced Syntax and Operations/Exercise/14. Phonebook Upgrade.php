<?php

$input = readline();
$phoneBook = [];
while ($input != "END") {
    $tolkens = explode(" ", $input);

    if ($tolkens[0] == "A"):

        $phoneBook[$tolkens[1]] = $tolkens[2];

    elseif ($tolkens[0] == "S"):
        if (array_key_exists($tolkens[1], $phoneBook)) {
            echo $tolkens[1] . " -> " . $phoneBook[$tolkens[1]] . PHP_EOL;
        } else {
            echo "Contact $tolkens[1] does not exist." . PHP_EOL;
        }
    else: //ListAll
        ksort($phoneBook);

        foreach ($phoneBook as $key => $value) {
            echo $key." -> ".$value.PHP_EOL;
        }

    endif;


    $input = readline();
}