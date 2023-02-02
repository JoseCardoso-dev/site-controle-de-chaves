<?php
    include("conexao.php");

    if(isset($_POST['button-login'])){

        if(strlen($_POST['email']) == 0){
            echo "preencha o seu email";
        }else if(strlen($_POST['senha']) == 0){
            echo "preencha a sua senha";
        }else{

            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['senha']);
        
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