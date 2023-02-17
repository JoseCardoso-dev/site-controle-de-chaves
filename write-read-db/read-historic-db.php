<?php

    include('../conexao-mysql.php');

    $sql_code = "SELECT * FROM registers ORDER BY dataTime DESC";

    $result = $mysqli->query($sql_code) or die("Fala na execução do código SQL");
?>