<?php

    include('../conexao-mysql.php');

    if(!empty($_GET['id'])){

        $sql_code = "SELECT nChave FROM registers WHERE id = $_GET[id]";
        $consulta = $mysqli->query($sql_code) or die("Fala na execução do código SQL");


        $dado = mysqli_fetch_object($consulta);
        $nChave = $dado->nChave;

        $sql_code = "UPDATE chaves SET situacao = 'livre' WHERE numero = '$nChave'";
    
        $sql_query = $mysqli->query($sql_code) or die("Fala na execução do código SQL");


        date_default_timezone_set("America/Recife");
        $dataAtual = date("Y-m-d H:i");

        $sql_code = "UPDATE registers SET dateTimeDevolucao = '$dataAtual', situacao = 'Devolvida' WHERE id = $_GET[id]";
    
        $sql_query = $mysqli->query($sql_code) or die("Fala na execução do código SQL");

        header("Location: ../pages/page_historic.php");
    }else{
        header("Location: ../pages/page_historic.php");
    }

?>