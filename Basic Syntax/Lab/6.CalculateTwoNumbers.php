<?php
/**
 * calculate two numbers given, given the command
 */

$num1 = intval(readline());
$num2 = intval(readline());
$command = readline();

switch ($command){
    case "sum": echo $num1 + $num2;
        break;
    case "subtract": echo $num1 - $num2;
        break;
    case "divide":
        if ($num1 == 0){
            echo "Cannot divide by zero";
            break;
        }
        echo $num1/$num2;
    break;
    case "multiply": echo $num1*$num2;
        break;
    default: echo "Wrong operation supplied";
        break;
}