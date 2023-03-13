<?php

    include('../conexao-mysql.php');

    $sql_code = "SELECT * FROM users ORDER BY nome DESC";

    $result = $mysqli->query($sql_code) or die("Fala na execução do código SQL");
    
?>