<?php

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


if ($suma != "") {
    echo suma($num1, $num2);
}

if ($resta != "") {
    echo resta($num1, $num2);
}


?>