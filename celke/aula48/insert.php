<?php

include_once('aula48.php');

/*
$sql_insert_user = "INSERT INTO usuarios (nome,email,sits_usuario_id,niveis_acesso_id,created)
VALUES ('Juliana Emidio','julianaemidio@julianaemidio.com.br',1)";

$sql_insert_user_result = $conn->prepare($sql_insert_user);
$sql_insert_user_result->execute();

if($sql_insert_user_result->rowCount() > 0){
    print 'Usuário adicionado com sucesso';
}
*/

$nome = "Elias";
$email = "elias@elias.com.br";
$sits_usuario_id = 1;
$niveis_acesso_id = 1;

$sql_user_insert = "INSERT INTO usuarios (nome,email,sits_usuario_id,niveis_acesso_id,created)
VALUES (:nome,:email,:sits_usuario_id,:niveis_acesso_id,NOW())";

$sql_user_exec = $conn->prepare($sql_user_insert);

$sql_user_exec->bindParam(':nome',$nome,PDO::PARAM_STR);
$sql_user_exec->bindParam(':email',$email,PDO::PARAM_STR);
$sql_user_exec->bindParam(':sits_usuario_id',$sits_usuario_id,PDO::PARAM_INT);
$sql_user_exec->bindParam(':niveis_acesso_id',$niveis_acesso_id,PDO::PARAM_INT);

$sql_user_exec->execute();

