<?php

$multiplicacion = $_GET['multiplicacion'];
$division = $_GET['division'];
$suma = $_GET['suma'];
$resta = $_GET['resta'];
$num1 = $_GET['numero1'];
$num2 = $_GET['numero2'];

function suma($a, $b){
    return $a + $b;
}

function resta($a, $b){
    return $a - $b;
}

function multiplicacion($a, $b){
    return $a * $b;
}

function division($a, $b){
    return $a / $b;
}


if ($suma != "") {
    echo suma($num1, $num2);
}

if ($resta != "") {
    echo resta($num1, $num2);
}

if ($multiplicacion != "") {
    echo multiplicacion($num1, $num2);
}

if ($division != "") {
    echo division($num1, $num2);
}


?>