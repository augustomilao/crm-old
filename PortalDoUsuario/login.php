<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Usuário</title>

    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- Fonte -->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <!-- CSS Próprio -->
    <link rel="stylesheet" href="../estilo.css">
    <!-- JS -->
    <script src="./script.js"></script>
</head>

<body>

    <div class="container">
        <br>
        <form method="POST" action="./loginsql.php">
            <label class="negrito" for="usuario">Usuário: </label>
            <input class="form-control" type="text" name="usuario">
            <label class="negrito" for="senha">Senha: </label>
            <input class="form-control" type="password" name="senha">
            <br>
            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
    </div>

</body>

</html>