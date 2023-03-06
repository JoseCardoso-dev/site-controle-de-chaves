<?php

$usuario = 'root';
$senha = 'root';
$database = 'controleChavesDB';
$host = '172.28.0.2';

$mysqli = new mysqli($host, $usuario, $senha, $database);
mysqli_set_charset($mysqli, "utf8");

if($mysqli->error){
    die("Falha ao conectar ao banco de dados: " .$mysqli->error);
}

?>