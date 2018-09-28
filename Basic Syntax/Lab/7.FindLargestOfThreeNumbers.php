<?php
 $num1 = intval(readline());
 $num2 = intval(readline());
 $num3 = intval(readline());

 $maxNumberFromTwo = max($num1, $num2);
 $maxNumberFromAll = max($maxNumberFromTwo, $num3);

 echo $maxNumberFromAll;