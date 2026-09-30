<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>entrada</title>
</head>
<body>
    <header>
        <h1>Calculadora Top das Galáxias</h1>
    </header>
    <main>
        <form action="lógica controller.php" method="post">
            <label for="num1">Primeiro número:</label>
            <input type="number" step="0.1" id="num1" name="num1" required><br>

            <label for="num2">Segundo número:</label>
            <input type="number" step="0.1" id="num2" name="num2" required><br>

            <label for="operacao">Operação:</label>
            <select name="operacao" id="operacao">
                <option selected disabled>Selecione...</option>
                <option value="+">+ (adição)</option>
                <option value="-">- (subtração)</option>
                <option value="*">* (multiplicação)</option>
                <option value="/">/ (divisão)</option>
            </select><br><br>

            <button type="submit">ENVIAR</button>
        </form>
    </main>
</body>
</html>