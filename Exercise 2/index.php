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

function findMin($array)
{
    $min = $array[0];
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] < $min) {
            $min = $array[$i];
        }
    }
    return " So nho nhat trong mang la : " . $min;
}

print_r(findMin($array));
echo "<br>";

function evenMax($array)
{
    $max = $array[0];
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] % 2 == 0) {
            if ($array[$i] > $max) {
                $max = $array[$i];
            }
        }
    }
    return " So nguyen duong lon nhat trong mang la : " . $max;
}

print_r(evenMax($array));
echo "<br>";

function evenMin($array)
{
    $min = $array[0];
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] % 2 == 0) {
            if ($array[$i] < $min) {
                $min = $array[$i];
            }
        }
    }
    return " So nguyen nho nhat trong mang la : " . $min;
}

print_r(evenMin($array));
echo "<br>";


function sumArray($array)
{
    $sum = 0;
    for ($i = 0; $i < count($array); $i++) {
        $sum += $array[$i];
    }
    return " Tong cua mang la : " . $sum;
}

print_r(sumArray($array));
echo "<br>";


function avgSum($array)
{
    $sum = 0;
    for ($i = 0; $i < count($array); $i++) {
        $sum += $array[$i];
    }
    return " Trung binh tong cua mang la : " . floor($sum / count($array));
}

print_r(avgSum($array));
echo "<br>";

function maxThanAvgSum($array)
{
    $arr = [];
    $sum = 0;
    for ($i = 0; $i < count($array); $i++) {
        $sum += $array[$i];
    }
    $avg = $sum / count($array);
    for ($i = 0 ; $i <count($array) ; $i++){
        if ($array[$i] > $avg){
            $arr[] = $array[$i];
        }
    }
    return $arr;

}


echo " Cac so lon hon trung binh cong la :" . "<br>";
print_r(maxThanAvgSum($array)) ;
echo "<br>";


function sortIn($array){

    sort($array);
    return $array;

}
echo " Mang sap xep theo chieu tang dan la : " . "<br>";
print_r(sortIn($array));
echo "<br>";


function sortDe($array){
    rsort($array);
    return $array;
}
echo " Mang sap xep theo chieu giam dan la : " . "<br>";
print_r(sortDe($array));
echo "<br>";