<?php
include 'config.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];

$sql = "UPDATE pecas SET nome='$nome', descricao='$descricao', preco='$preco', quantidade='$quantidade' WHERE id=$id";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Atualização</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1>Gerenciamento de Peças de Computadores</h1>
    </header>
    <div class="container">
        <?php
        if ($conn->query($sql) === TRUE) {
            echo "<p>Peça atualizada com sucesso!</p>";
        } else {
            echo "<p>Erro: " . $sql . "<br>" . $conn->error . "</p>";
        }
        ?>
        <a href="index.php">Voltar à Lista de Peças</a>
    </div>
</body>
</html>

<?php
$conn->close();
?>