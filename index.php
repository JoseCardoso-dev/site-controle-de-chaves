<?php
    include('conexao.php');

    if(isset($_POST['button-login'])){

        if(strlen($_POST['email']) == 0){
            echo "Preencha o seu email";
        }else if(strlen($_POST['senha']) == 0){
            echo "Preencha a sua senha";
        }else{

            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['senha']);
            
            $sql_code = "SELECT * FROM user WHERE email = '$email' AND senha = '$senha'";
            $sql_query = $mysqli->query($sql_code) or die("Fala na execução do código SQL: " .$mysqli->error);

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

                header("Location: page_home.php");

            }else{
                echo "Falha ao Logar! E-mail ou Senha incorretos!";
            }
        }
    }
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <section class="area-login">
        <div class="login">
            <div class="title">Entrar</div>
            <form method="POST">
                <input type="text" name="email" placeholder="Email" autofocus>
                <input type="password" name="senha" placeholder="Senha">
                <label><input type="checkbox">Lembre me</label>
                <input type="submit" name="button-login" value="entrar">
            </form>
            <p>Controle de Chaves - Infra</p>
            <div><img src="img/logo-scmba-azul.png"></div>
        </div>
    </section>
</body>
</html>