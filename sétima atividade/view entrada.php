<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>entrada</title>
</head>
<body>
    <header>
        <h1>Cálculo de Salário</h1><hr>
    </header>
    <main>
        <form action="lógica controller.php" method="post">
            <label for="nome">Nome do funcionário:</label>
            <input type="text" id="nome" name="nome"><br>

            <label for="salario">Salário atual:</label>
            <input type="number" step="0.01" id="salario" name="salario"><br>

            <label for="cargo">Cargo:</label>
            <select name="cargo" id="cargo">
                <option selected disabled>Selecione...</option>
                <option value="Estagiário">Estágiário</option>
                <option value="Assistente">Assistente</option>
                <option value="Analista">Analista</option>
            </select><br><br>

            <button type="submit">ENVIAR</button>
        </form>
    </main>
</body>
</html>