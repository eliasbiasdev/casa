<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$port = 3307;
$dbname = "celkenew";

try {
    $conn = new PDO("mysql:host=$servidor;port=$port;dbname=". $dbname,$usuario,$senha);
  //  echo "Conexao efetuada com sucesso";
}catch(PDOException $err){
    echo "Erro ao conectar no banco de dados" . $err->getMessage();
}