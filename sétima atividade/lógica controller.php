<?php
$nome = $_POST["nome"];
$salario = $_POST["salario"];
$cargo = $_POST["cargo"];
$aumento = 0;

if ($cargo == "Estagiário"){
    $aumento = $salario*(10/100);
}elseif ($cargo == "Assistente"){
    $aumento = $salario*(8/100);
}else {
    $aumento = $salario*(5/100);
}
$novo = $salario + $aumento;

require_once "view saída.php";
?>