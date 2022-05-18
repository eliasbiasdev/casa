<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$port = 3307;
$dbname = "celkem";

try {
    $conn = new PDO("mysql:host=$servidor;port=$port;dbname=". $dbname, $usuario,$senha);
} catch (PDOException $err) {
    echo "Erro ao acessar o banco de dados" . $err->getMessage();
}

