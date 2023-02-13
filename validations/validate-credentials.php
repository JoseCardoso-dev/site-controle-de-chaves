<?php

    include('../conexao-mysql.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $email = $mysqli->real_escape_string($email);
    $senha = $mysqli->real_escape_string($senha);
    
    $sql_code = "SELECT * FROM users WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Fala na execução do código SQL");

    $qtd_resultado = $sql_query->num_rows;

    if($qtd_resultado == 1){

        $usuario = $sql_query->fetch_assoc();

        if(!isset($_SESSION)){
            session_start();
        }

        $_SESSION['matricula'] = $usuario['matricula'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['email'] = $usuario['email'];
        $_SESSION['senha'] = $usuario['senha'];
        
        echo 'validado';

    }else{
        echo  "Email ou Senha Incorretos!";
    }
?>
