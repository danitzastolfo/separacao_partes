<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>entrada</title>
</head>
<body>
    <header>
        <h1>Dados da compra</h1><hr>
    </header>
    <main>
        <form action="lógica controller.php" method="post">
            <label for="nomecl">Nome do cliente:</label>
            <input type="text" id="nomecl" name="nomecl"><br>

            <label for="nomepr">Nome do produto:</label>
            <input type="text" id="nomepr" name="nomepr"><br>

            <label for="preco">Preço: R$ </label>
            <input type="number" step="0.01" id="preco" name="preco"><br>

            <label for="quantidade">Quantidade:</label>
            <input type="number" id="quantidade" name="quantidade"><br><br>

            <button type="submit">ENVIAR</button>
        </form>
    </main>
</body>
</html>