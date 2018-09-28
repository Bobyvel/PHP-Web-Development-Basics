<?php

$month = "August";

$date = "2018-$month-01";

$first_day = date('N',strtotime($date));
$first_day = 7 - $first_day + 1;
$last_day =  date('t',strtotime($date));

$m = date_parse($month);
for($i=$first_day; $i<=$last_day; $i=$i+7 ){
    echo $i."rd ".sprintf("%02s", $m["month"]).", 2018".PHP_EOL;
}



