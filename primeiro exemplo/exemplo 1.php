<?php
$nome = "Mateus";
$informacoes = [
    [
        "nome" => "mateus",
        "cpf" => "000.000.000-00",
        "idade" => 16,
    ],
    [
        "nome" => "samuel",
        "cpf" => "111.111.111-11",
        "idade" => 23,
    ]
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='UTF-8'>
    <title>PHP + HTML</title>
</head>
<body>
    <h1>Exemplo de Cadastro</h1>
    <p><?= $nome ?></p><hr>
    <h1>Informações do array</h1>
        <?php
            foreach ($informacoes as $pessoa){
        ?>
        <p>Exibindo informações:</p>
        <p><b>Nome:</b> <?= $pessoa["nome"] ?></p>
        <p><b>CPF:</b> <?= $pessoa["cpf"] ?></p>
        <p><b>Idade:</b> <?= $pessoa["idade"] ?><hr></p>
        <?php } ?>
</body>
</html>