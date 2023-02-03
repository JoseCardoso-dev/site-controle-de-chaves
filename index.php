<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="content">
        <h1>Entrar</h1>
        <form method="POST" id="form">
            <div>
                <input name="email" type="email" placeholder="Digite seu email" class="inputs required" oninput="emailValidate()">
                <span class="span-required">Digite um email válido</span>
            </div>
            <div>
                <input name="senha" type="password" placeholder="Senha" class="inputs required" oninput="passwordValidate()">
                <span class="span-required">Digite uma senha com no mínimo 8 caracteres</span>
            </div>
            
            <div class="box-select">
                <input type="checkbox" id="lembre-me" value="lembre-me">
                <label for="lembre-me">Lembre me</label>
            </div>

            <button type="submit" name="button-login">Enviar</button>
            <div class="complements"><p>Controle de Chaves - Infra</p><br>
            <img src="img/logo-scmba-branca.png"></div>

        </form>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="validate-inputs.js"></script>
</html>