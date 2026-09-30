<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>saída</title>
</head>
<body>
    <header>
        <h1>Compra finalizada</h1><hr>
    </header>
    <main>
        <p>Cliente: <?= $nomecl ?></p>
        <p>Produto: <?= $nomepr ?></p><br>
        <p>Quantidade: <?= $quantidade ?></p>
        <p>Preço unitário: R$ <?= $preco ?></p><br>
        <p>Subtotal: R$ <?= $subtotal ?></p>
        <p>Desconto: R$ <?= $desconto ?></p><br>
        <p>Total: R$ <?= $total ?></p>
    </main>
</body>
</html>