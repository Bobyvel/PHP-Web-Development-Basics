<?php

$text = readline();
$lenth = strlen($text);
if ($lenth < 20){

    for ($i = 0; $i < 20-$lenth; $i++){

        $text .= "*";
    }
}else{

    $text = substr($text, 0, 20);
}

echo $text;