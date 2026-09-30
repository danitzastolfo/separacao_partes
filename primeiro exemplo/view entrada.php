<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Processamento de Dados</title>
</head>
<body>
    <header>
        <h1>Formulário de Cadastro</h1>
    </header>
    <main>
        <form action="lógica controller.php" method="post">
            <label for="nome">Nome</label><br>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome..."><br>
            <label for="idade">Idade</label><br>
            <input type="number" id="idade" name="idade"><br><br>

            <button type="submit">ENVIAR</button>
        </form>
    </main>
</body>
</html>