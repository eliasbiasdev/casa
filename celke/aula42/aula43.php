<?php
include_once('conexao.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuário</title>
</head>
<body>
<h1>Listar Usuários</h1>
<?php

$sql_usuario = "SELECT * FROM usuarios LIMIT 15 OFFSET 10";
$sql_resultado = $conn->prepare($sql_usuario);
$sql_resultado->execute();

while($row_usuario = $sql_resultado->fetch(PDO::FETCH_ASSOC)){
   extract($row_usuario);

    //echo "<pre>";
    //var_dump($row_usuario);    
    echo "ID: " . $id . "<br>";
    echo "Usuario: " . $nome . "<br>";
    echo "Email: " . $email . "<hr>";
}



?>

</body>
</html>