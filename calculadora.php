<?php

//$multiplicacion = $_GET['multiplicacion'];
//$division = $_GET['division'];
//$suma = $_GET['suma'];
//$resta = $_GET['resta'];
$num1 = $_POST['numero1'];
$num2 = $_POST['numero2'];

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



foreach ($_POST as $key => $value) {
    
    switch ($key) {
        case 'suma':
            echo suma($num1, $num2);
            break;
        
        case 'resta':
            echo resta($num1, $num2);
            break;

        case 'multiplicacion':
            echo multiplicacion($num1, $num2);
            break;

        case 'division':
            echo division($num1, $num2);
            break;
        
        default:
            
            break;
    }

}


?>