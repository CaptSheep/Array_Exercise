<?php
function createArray($number)
{
    $array = [];
    for ($i = 0; $i < $number; $i++) {
        $array[] = rand(1, 100);
    }
    return $array;
}

$array = createArray(5);
print_r($array);
echo "<br>";


function sortArray($array)
{
    for ($i = 0; $i< count($array) ; $i++){
        $min = $array[$i];
        $index = $i;
        for ($j = $i +1 ; $j < count($array); $j++){
            if ($min > $array[$j]){
                $min = $array[$j];
                $index =$j;
            }
        }
        $temp = $array[$i];
        $array[$i] = $min;
        $array[$index] = $temp;
    }
    return $array;
}

print_r(sortArray($array));
