<?php
/**
 * Print Failed/Passed with from the console
 */
$grade = doubleval(readline());
if ($grade < 3.00){
    echo  "Failed!";
}else{
    echo "Passed!";
}