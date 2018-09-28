<?php

$str = readline();

$patDigits = '/\d+/';
$patLetters = '/[A-Za-z]+/';
$patOther = '/\W+/';

preg_match_all($patDigits, $str, $digits, PREG_SET_ORDER, 0);

foreach ($digits as $arr){
    echo implode($arr);
}

echo "\n";

preg_match_all($patLetters, $str, $letters, PREG_SET_ORDER, 0);

foreach ($letters as $arr){
    echo implode($arr);
}
echo "\n";

preg_match_all($patOther, $str, $other, PREG_SET_ORDER, 0);

foreach ($other as $arr){
    echo implode($arr);
}