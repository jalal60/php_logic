<?php
function generatePass($length)
{
    $sets = array();
    $sets[] = 'ABCDEFGHJKLMNPQRSTUVWXYZ';
    $sets[] = 'abcdefghjkmnpqrstuvwxyz';
    $sets[] = '1234567890';
    $sets[]  = '!@#$%^&*()_+';

    $password = '';
    //append a character from each set.
    foreach ($sets as $set) {
        $password .= $set[array_rand(str_split($set))];
    }
    //print_r($password);
    echo PHP_EOL;
    $i = 0;
    while (strlen($password) < $length) {

        $randomSet = $sets[array_rand($sets)];
        // $eachSets = $sets[$i];
        // $i++;
        $password .= $randomSet[array_rand(str_split($randomSet))];
    }
    echo $password;
}

generatePass(12);
