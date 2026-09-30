<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$operacao = $_POST["operacao"];

if ($operacao == "+"){
    $resultado = $num1 + $num2;
}elseif ($operacao == "-"){
    $resultado = $num1 - $num2;
}elseif ($operacao == "*"){
    $resultado = $num1*$num2;
}else {
    $resultado = $num1/$num2;
}
require_once "view saída.php";
?>