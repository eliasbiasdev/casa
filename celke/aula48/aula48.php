<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$port = 3307;
$dbname = "celkenew2";

try {
    $conn = new PDO("mysql:host=$servidor;port=$port;dbname=". $dbname,$usuario,$senha);
    echo "Conexão efetuada com sucesso";
} catch (PDOException $err) {
    print "Erro ao acessar o banco de dados " . $err->getMessage();
}
