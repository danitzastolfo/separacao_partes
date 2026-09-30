<?php
// var_dump($_POST);
$nome = $_POST["nome"];
$idade = $_POST["idade"];

if ($idade >= 18){
    $maioridade = "Maior de idade";
}else {
    $maioridade = "Menor de idade";
}

require_once "view saída.php" // envia valores das variáveis para a view saída
?>