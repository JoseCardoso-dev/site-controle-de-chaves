<?php

    include('../conexao-mysql.php');

    if(!empty($_GET['id'])){

        date_default_timezone_set("America/Recife");
        $dataAtual = date("Y-m-d H:i");

        $sql_code = "UPDATE registers SET dateTimeDevolucao = '$dataAtual', situacao = 'Devolvida' WHERE id = $_GET[id]";
    
        $sql_query = $mysqli->query($sql_code) or die("Fala na execução do código SQL");

        header("Location: ../pages/page_historic.php");
    }else{
        header("Location: ../pages/page_historic.php");
    }

?>