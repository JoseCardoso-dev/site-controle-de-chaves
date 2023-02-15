<?php

$usuario = 'root';
$senha = 'root';
$database = 'controleChavesDB';
$host = '172.19.0.3';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error){
    die("Falha ao conectar ao banco de dados: " .$mysqli->error);
}

?>