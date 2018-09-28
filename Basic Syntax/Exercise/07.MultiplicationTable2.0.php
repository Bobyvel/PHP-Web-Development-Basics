<?php

$number = intval(readline());
$multiplayer = intval(readline());

if ($multiplayer > 10){
    $result = $number*$multiplayer;
    printf("$number X $multiplayer = $result\n");
    return;
}

for ($i = $multiplayer; $i <= 10; $i++){

    $result = $number*$i;
    printf("$number X $i = $result\n");
}

