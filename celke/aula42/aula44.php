<?php

include_once('conexao.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clausula WHERE</title>
</head>
<body>
<?php

$sql_usuario = "SELECT * FROM usuarios WHERE id= 25 ";
$sql_resultado = $conn->prepare($sql_usuario);
$sql_resultado->execute();

$row_usuario = $sql_resultado->fetch(PDO::FETCH_ASSOC);
extract($row_usuario);

echo "ID: " . $id . "<br>";
echo "Nome: " . $nome . "<br>";
echo "Email: " . $email . "<hr>";

print "<h1> Pesquisar usuario pelo email1</h1>";
$sql_usuariob = "SELECT * FROM usuarios WHERE email='jessica10@celke.com.br' ";
$sql_resultb = $conn->prepare($sql_usuariob);
$sql_resultb->execute();

$row_usuariob = $sql_resultb->fetch(PDO::FETCH_ASSOC);

extract($row_usuariob);

echo "ID: " . $id . "<br>";
echo "Nome: " . $nome . "<br>";
echo "Email: " . $email ;

?>

</body>
</html>