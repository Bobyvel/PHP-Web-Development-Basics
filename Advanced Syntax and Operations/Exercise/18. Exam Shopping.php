<?php

$shop = [];

$input = readline();

while ($input != "exam time") {

    $tolkens = explode(" ", $input);


    if ($tolkens[0] == "stock"):
        $product = $tolkens[1];
        $quantity = intval($tolkens[2]);

        if (!array_key_exists($product, $shop)):
            $shop[$product] = 0;
        endif;
            $shop[$product] += $quantity;


    elseif ($tolkens[0] == "shopping"):
        $input = readline();
        while ($input != "exam time") {

            $tolkens = explode(" ", $input);
            $product = $tolkens[1];
            $quantity = intval($tolkens[2]);

            if (!array_key_exists($product, $shop)):
                echo "$product doesn't exist".PHP_EOL;
            else:
                $inStock = $shop[$product];

                if ($inStock == 0):
                    echo "$product out of stock".PHP_EOL;
                elseif ($inStock < $quantity):
                    $shop[$product] = 0;
                else:
                    $shop[$product] -= $quantity;
                endif;
            endif;
            $input = readline();

        }
        endif;

        if ($input == "exam time"):break;endif;
        $input = readline();

}

foreach ($shop as $key => $value) {

    if ($value != 0):
        echo "$key -> $value".PHP_EOL;
    endif;
}