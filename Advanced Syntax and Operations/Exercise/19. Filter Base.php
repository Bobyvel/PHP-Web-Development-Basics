<?php

$ageList = [];
$positionList = [];
$salaryList = [];

$input = readline();
while ($input != "filter base") {

    $tolkens = explode(" -> ", $input);
    $name = $tolkens[0];
    $property = $tolkens[1];
    $doublePattern = '/\d+\./';
    $intPattern = '/^[0-9]+$/';
    if (preg_match($doublePattern, $property) == 1):
        if (!array_key_exists($name, $salaryList)):
            $salaryList[$name] = $property;
        endif;
    elseif (preg_match($intPattern, $property) == 1):
        if (!array_key_exists($name, $ageList)):
            $ageList[$name] = $property;
        endif;
    else:
        if (!array_key_exists($name, $positionList)):
            $positionList[$name] = $property;
        endif;
    endif;


    $input = readline();
}

$input = readline();
switch ($input) {
    case "Position":
        foreach ($positionList as $key => $value) {
            echo "Name: $key" . PHP_EOL . "Position: $value" . PHP_EOL . "====================" . PHP_EOL;

        }
        break;
    case "Salary":
        foreach ($salaryList as $key => $value) {
            echo "Name: $key" . PHP_EOL;
            echo "Salary: ";
            printf("%.2f", $value);
            echo PHP_EOL . "====================" . PHP_EOL;

        }
        break;
    case "Age":
        foreach ($ageList as $key => $value) {
            echo "Name: $key" . PHP_EOL . "Age: $value" . PHP_EOL . "====================" . PHP_EOL;

        }
        break;
}