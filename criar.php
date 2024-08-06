<!DOCTYPE html>
<html>
<head>
    <title>Inserir Peça</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1>Gerenciamento de Peças de Computadores</h1>
    </header>
    <div class="container">
        <h2>Inserir Nova Peça</h2>
        <form action="store.php" method="post">
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome"><br>
            <label for="descricao">Descrição:</label><br>
            <textarea id="descricao" name="descricao"></textarea><br>
            <label for="preco">Preço:</label><br>
            <input type="text" id="preco" name="preco"><br>
            <label for="quantidade">Quantidade:</label><br>
            <input type="text" id="quantidade" name="quantidade"><br><br>
            <input type="submit" value="Inserir">
        </form>
    </div>
</body>
</html>