<?php
include 'config.php';

$sql = "SELECT id, nome, descricao, preco, quantidade FROM pecas";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Peças</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1>Gerenciamento de Peças de Computadores</h1>
    </header>
    <div class="container">
        <h2>Lista de Peças</h2>
        <a href="criar.php">Inserir Nova Peça</a><br><br>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Ações</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["id"]. "</td>
                            <td>" . $row["nome"]. "</td>
                            <td>" . $row["descricao"]. "</td>
                            <td>" . $row["preco"]. "</td>
                            <td>" . $row["quantidade"]. "</td>
                            <td>
                                <a href='edit.php?id=" . $row["id"] . "'>Editar</a>
                                <a href='delete.php?id=" . $row["id"] . "'>Excluir</a>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Nenhuma peça encontrada</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>

<?php
$conn->close();
?>