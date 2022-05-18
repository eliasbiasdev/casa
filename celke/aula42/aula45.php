<?php
    include_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Executando o AND e OR</title>
</head>
<body>
    <?php

    $sql_usuarios = "SELECT id,nome,email,sits_usuario_id,niveis_acesso_id FROM usuarios WHERE sits_usuario_id=1 OR niveis_acesso_id=1 ORDER BY nome ASC";
    $sql_usuario_exec = $conn->prepare($sql_usuarios);
    $sql_usuario_exec->execute();

    while($row_usuario = $sql_usuario_exec->fetch(PDO::FETCH_ASSOC)){
        extract($row_usuario);

        echo "ID: " . $id . "<br>";
        echo "ID: " . $nome . "<br>";
        echo "ID: " . $email . "<br>";
        echo "ID: " . $sits_usuario_id . "<br>";
        echo "ID: " . $niveis_acesso_id . "<hr>";
    }

    ?>
</body>
</html>