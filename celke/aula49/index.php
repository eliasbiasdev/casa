<?php

    include_once('conexao.php');
?>
<!DOCTYPE html!>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Clientes</title>
    </head>
    <body>
    <h1>Cadastrar Usuário</h1>
        <?php

            
            $dados = filter_input_array(INPUT_POST,FILTER_DEFAULT);
            
            if(!empty($dados['SendCadUsuario'])){
                //var_dump($dados);

                // Insert de usuários no banco de dados
                $sql_insert_usuario = "INSERT INTO usuarios (nome,email,senha,sits_usuario_id,niveis_acesso_id,created)
                VALUES (:nome,:email,:senha,:sits_usuario_id,:niveis_acesso_id,NOW())";

                $sql_insert_usuario_exec = $conn->prepare($sql_insert_usuario);
                
                $sql_insert_usuario_exec->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
                $sql_insert_usuario_exec->bindParam(':email', $dados['email']);
                $sql_insert_usuario_exec->bindParam(':senha', $dados['senha']);
                $sql_insert_usuario_exec->bindParam(':sits_usuario_id', $dados['sits_usuario_id'], PDO::PARAM_INT);
                $sql_insert_usuario_exec->bindParam(':niveis_acesso_id', $dados['niveis_acesso_id'], PDO::PARAM_INT);

                $sql_insert_usuario_exec->execute();

                if($sql_insert_usuario_exec->rowCount() > 0){
                    print 'Usuário cadastrado com sucesso';
                }else {
                    print 'Usuário não cadastrado';
                }



            }

        ?>
       
        <form method="POST">
            <label>Nome:</label>
            <input type="text" name="nome" require><br>

            <label>E-mail:</label>
            <input type="text" name="email" require><br>

            <label>Senha:</label>
            <input type="password" name="senha" require><br>

            <label>Situação Usuário:</label>
            <input type="number" name="sits_usuario_id" require><br>

            <label>Niveis acesso:</label>
            <input type="number" name="niveis_acesso_id" require><br>

            <input type="submit" value="Cadastra" name="SendCadUsuario">
        </form>
    </body>
</html>