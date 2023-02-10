<?php

$usuario = 'root';
$senha = 'root';
$database = 'controleChavesBD';
$host = '172.28.0.4';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error){
    die("Falha ao conectar ao banco de dados: " .$mysqli->error);
}

?>