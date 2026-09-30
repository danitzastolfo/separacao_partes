<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>entrada</title>
</head>
<body>
    <header>
        <h1>Conversor de Temperatura</h1><hr>
    </header>
    <main>
        <form action="lógica controller.php" method="post">
            <label for="tempce">Temperatura em °C:</label>
            <input type="number" step="0.1" id="tempce" name="tempce"><br><br>

            <button type="submit">ENVIAR</button>
        </form>
    </main>
</body>
</html>