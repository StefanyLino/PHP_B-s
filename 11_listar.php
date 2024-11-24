<?php
// Conecta ao banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exercicio";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Consulta os dados da tabela clientes
$sql = "SELECT id, nome, email FROM clientes";
$result = $conn->query($sql);

// Verifica se existem registros e os exibe em formato de tabela
if ($result->num_rows > 0) {
    echo "<h2>Lista de clientes cadastrados</h2>";

    // define formato da tabela
    echo "<table border='2'>";

    // define cabeçalho da tabela
    echo "<tr><th>ID</th><th>Nome</th><th>Email</th></tr>";

    // enquanto tiver dados preenchidos no BD
    // listar e exibir em formato de tabela
    while ($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    
} else {
    echo "Nenhum cliente encontrado.";
}
// Fecha a conexão
$conn->close();
?>
