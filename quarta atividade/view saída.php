<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>saída</title>
</head>
<body>
    <header>
        <h1>Situação do aluno</h1><hr>
    </header>
    <main>
        <p>Aluno: <?= $_POST["nome"] ?></p>
        <p>Primeira nota: <?= $nota1 ?></p>
        <p>Segunda nota: <?= $nota2 ?></p>
        <p>Média: <?= $media ?></p>
        <p>Situação: <?= $situacao ?></p>
    </main>
</body>
</html>