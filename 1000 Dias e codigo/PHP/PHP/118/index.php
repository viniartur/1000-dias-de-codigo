<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Festas</title>
    <style>
        .div {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>

    <div class="div">
        <form method="POST" action="">
            <label>Nome:</label>
            <input type="text" name="nome" placeholder="Digite o nome completo"><br><br>
            <label>Endereço:</label>
            <input type="text" name="endereco" placeholder="Digite seu endereço"><br><br>
            <label>Cidade:</label>
            <input type="text" name="cidade" placeholder="Digite sua cidade"><br><br>
            <label>Data:</label>
            <input type="date" name="data"><br><br>
            <button type="submit" value="Cadastrar">Inserir festa</button><br><br>
        </form>
    </div>
</body>
</html>