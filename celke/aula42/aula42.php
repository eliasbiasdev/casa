<?php

include_once("conexao.php");

$result_usuario = "SELECT * FROM usuarios";
$resultado_usuario = $conn->prepare($result_usuario);
$resultado_usuario->execute();

while($row_user = $resultado_usuario->fetch(PDO::FETCH_ASSOC)){

   // print '<pre>';
   // var_dump($row_user);
    echo "ID: " . $row_user['id'] . "<br>";
    echo "Nome: " . $row_user['nome'] . "<br>"; 
    echo "Email: " . $row_user['email'] . "<br>";
    echo "Situação: " . $row_user['sits_usuario_id'] . "<br>";
    echo "Sinvel de acesso: " . $row_user['niveis_acesso_id'] . "<br>";
    echo  "Data criação: " . date('F j, Y, g:i a', strtotime($row_user['created'])) . "<br>";
    echo "Data modificação: " ;
    if(!empty($row_user['modified'])){
        echo  date('F j, Y, g:i a', strtotime($row_user['modified']));
    }
    echo "<hr>";
    
} 