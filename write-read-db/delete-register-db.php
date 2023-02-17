<?php 

    include('../conexao-mysql.php');

    if(!empty($_GET['id'])){

        $sql_code = "DELETE FROM registers WHERE id = $_GET[id]";
    
        $sql_query = $mysqli->query($sql_code) or die("Fala na execução do código SQL");

        header("Location: ../pages/page_historic.php");
    }else{
        header("Location: ../pages/page_historic.php");
    }


?>