<?php

$months = ["January", "February", "March", "April", "May", "June",  "July", "August", "September", "October", "November", "December"];

$number = intval(readline());

$monthName = $months[$number-1];

if ($monthName != null):
    echo $monthName;
else: echo "Invalid Month!";
endif;

