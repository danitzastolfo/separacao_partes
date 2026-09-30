<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>entrada</title>
</head>
<body>
    <header>
        <h1>Dados do aluno</h1><hr>
    </header>
    <main>
        <form action="lógica controller.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome"><br>

            <label for="nota1">Nota 1:</label>
            <input type="number" step="0.01" id="nota1" name="nota1"><br>

            <label for="nota2">Nota 2:</label>
            <input type="number" step="0.01" id="nota2" name="nota2"><br><br>

            <button type="submit">ENVIAR</button>
        </form>
    </main>
</body>
</html>