<?php
include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM pecas WHERE id=$id";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Exclusão</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1>Gerenciamento de Peças de Computadores</h1>
    </header>
    <div class="container">
        <?php
        if ($conn->query($sql) === TRUE) {
            echo "<p>Peça excluída com sucesso!</p>";
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