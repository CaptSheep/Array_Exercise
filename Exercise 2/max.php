<?php
function findMax($array): string
{
    $array = inputFloat(5);
    $max = $array[0];
    for ( $i = 0 ; $i < count($array); $i++){
        if ($array[$i] > $max){
            $array[$i] = $max;
        }
    }
    return " So lon nhat la : " . $max . "<br>";
}


