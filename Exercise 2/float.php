<?php
function inputFloat($number)
{
    $array = [];
    for ($i = 0; $i < $number; $i++) {
        $array[$i] = rand(1,100)/10;
        $array[] = floatval($array[$i]);
    }
    return $array;
}
$array = inputFloat(5);
print_r($array);
