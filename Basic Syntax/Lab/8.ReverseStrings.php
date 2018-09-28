<?php

$word = readline();
while ($word != "end"){

    echo $word." = ".strrev($word)."\n";

    $word = readline();
}