<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!--<a href="float.php"> Nhap mang so thuc</a>-->
<!--<a href="max.php"> Tim so lon nhat trong mang</a>-->
<!--</body>-->
<!--</html>-->
<?php
function inputFloat($number)
{
    $array = [];
    for ($i = 0; $i < $number; $i++) {
        $array[$i] = rand(1, 100) / 10;
        $array[] = floatval($array[$i]);
    }
    return $array;
}

$array = inputFloat(5);
print_r($array);
echo "<br>";


function findMax($array): string
{
    $max = $array[0];
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] > $max) {
           $max = $array[$i];
        }
    }
    return " So lon nhat la : " . $max . "<br>";
}

print_r(findMax($array)) . "<br>";

function findMin($array){
    $min = $array[0];
    for ( $i = 0 ; $i < count($array); $i++ ){
        if ($array[$i] < $min){
            $min =  $array[$i];
        }
    }
    return " So nho nhat trong mang la : " . $min;
}

print_r(findMin($array));

