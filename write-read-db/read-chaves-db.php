<?php

    include('../conexao-mysql.php');

    $sql_code = "SELECT * FROM chaves";

    $result = $mysqli->query($sql_code) or die("Fala na execução do código SQL");
?>