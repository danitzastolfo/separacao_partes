<?php
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$media = ($nota1 + $nota2)/2;

if ($media >= 7){
    $situacao = "Aprovado";
}elseif ($media >= 5 && $media < 7){
    $situacao = "Recuperação";
}else {
    $situacao = "Reprovado";
}
require_once "view saída.php";
?>