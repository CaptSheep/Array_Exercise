<?php
function createArray($number){
    $array = [];
    for ($i = 0 ; $i<$number;$i++){
        $array[] = rand(1,100);
    }
    return $array;
}
print_r(createArray(5));
