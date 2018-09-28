<?php

$hallCapacity = intval(readline());
$package = readline();
$priceHall = 0;
$hall = "";

if ($hallCapacity <= 50){
$hall = "Small Hall";
$priceHall = 2500;

}elseif ($hallCapacity > 50 && $hallCapacity <= 100){
$hall = "Terrace";
$priceHall = 5000;

}elseif ($hallCapacity > 100 && $hallCapacity <= 120){
$hall = "Great Hall";
$priceHall = 7500;

}else{
    echo "We do not have an appropriate hall.";
    return;
}

if ($package == "Normal"){

    $priceHall += 500;
    $priceHall = $priceHall - ($priceHall * 0.05);

}elseif ($package == "Gold"){

    $priceHall += 750;
    $priceHall = $priceHall - ($priceHall * 0.1);

}elseif ($package == "Platinum"){

    $priceHall += 1000;
    $priceHall = $priceHall - ($priceHall * 0.15);

}
$pricePerPerson = round($priceHall/$hallCapacity, 2);

echo"We can offer you the $hall\n";
echo "The price per person is $pricePerPerson$";
