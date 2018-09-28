<?php

$text = readline();
$arr = explode(" ", readline());

$character = $arr[0];
$occurrence = $arr[1];
$position = -1;
while (true){


    $position = strpos($text, $character, $position+1);

    if ($position == false){
        echo "Find the letter yourself!";
        break;
    }else{
        $occurrence--;
    }

    if ($occurrence == 0){
        echo $position;
        break;
    }

}
