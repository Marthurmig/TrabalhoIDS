<?php
include 'config.php';

$id = $_GET['id'];

$sql = "SELECT id, nome, descricao, preco, quantidade FROM pecas WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Peça</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1>Gerenciamento de Peças de Computadores</h1>
    </header>
    <div class="container">
        <h2>Editar Peça</h2>
        <form action="att.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome" value="<?php echo $row['nome']; ?>"><br>
            <label for="descricao">Descrição:</label><br>
            <textarea id="descricao" name="descricao"><?php echo $row['descricao']; ?></textarea><br>
            <label for="preco">Preço:</label><br>
            <input type="text" id="preco" name="preco" value="<?php echo $row['preco']; ?>"><br>
            <label for="quantidade">Quantidade:</label><br>
            <input type="text" id="quantidade" name="quantidade" value="<?php echo $row['quantidade']; ?>"><br><br>
            <input type="submit" value="Atualizar">
        </form>
    </div>
</body>
</html>

<?php
$conn->close();
?>