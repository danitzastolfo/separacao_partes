<?php
$nomecl = $_POST["nomecl"];
$nomepr = $_POST["nomepr"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];
$subtotal = $preco*$quantidade;
$desconto = 0;

if ($subtotal >= 200){
    $desconto = $subtotal*(10/100);
}
$total = $subtotal - $desconto;

require_once "view saída.php";
?>