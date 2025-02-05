<?php
session_start();

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $host = 'localhost';
    $dbname = 'festas';
    $username = 'root';
    $password = '';

    // Conecta ao banco de dados usando MySQLi
    $conn = new mysqli($host, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Captura os dados do formulário
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    $data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);

    // Valida os dados
    if (empty($nome) || empty($endereco) || empty($cidade) || empty($data)) {
        $_SESSION['msg'] = "<p>Preencha todos os campos!</p>";
    } else {
        // Insere os dados no banco de dados usando prepared statements
        $sql = "INSERT INTO festas (nome, endereco, cidade, data) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $nome, $endereco, $cidade, $data);
        if ($stmt->execute()) {
            $_SESSION['msg'] = "<p>Festa cadastrada com sucesso!</p>";
        } else {
            $_SESSION['msg'] = "<p>Erro ao cadastrar festa: " . $conn->error . "</p>";
        }
        $stmt->close();
    }

    // Fecha a conexão
    $conn->close();

    // Redireciona de volta para o formulário
    if (!headers_sent()) {
        header("Location: index.php");
        exit();
    }
}
?>