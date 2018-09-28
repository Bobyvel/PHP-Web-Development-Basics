<?php

$usersList = [];
$failedTimes = 0;
$input = readline();
while ($input != "end") {

    if ($input == "login"):
        $input = readline();
        while ($input != "end") {

            $tolkens = explode(" -> ", $input);
            $user = $tolkens[0];
            $pass = $tolkens[1];

            if (array_key_exists($user, $usersList) && $usersList[$user] == $pass):
                echo $user . ": logged in successfully".PHP_EOL;
            else:
                echo $user . ": login failed".PHP_EOL;
                $failedTimes++;
            endif;
            $input = readline();
        }
    else:
        $tolkens = explode(" -> ", $input);
        $user = $tolkens[0];
        $pass = $tolkens[1];

        $usersList[$user] = $pass;
    endif;

    if ($input == "end"):
        break;
    endif;

    $input = readline();
}

echo "unsuccessful login attempts: $failedTimes";

