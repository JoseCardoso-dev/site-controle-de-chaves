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
        <form id="form">
            <div>
                <input type="email" placeholder="Digite seu email" class="inputs required" oninput="emailValidate()">
                <span class="span-required">Digite um email válido</span>
            </div>
            <div>
                <input type="password" placeholder="Senha" class="inputs required" oninput="mainPasswordValidate()">
                <span class="span-required">Digite uma senha com no mínimo 8 caracteres</span>
            </div>
            
            <div class="box-select">
                <input type="checkbox" id="lembre-me" value="lembre-me">
                <label for="lembre-me">Lembre me</label>
            </div>

            <button type="submit">Enviar</button>
            <div class="complements"><p>Controle de Chaves - Infra</p><br>
            <img src="img/logo-scmba-branca.png"></div>

        </form>
    </div>
</body>
<script>
    const form   = document.getElementById('form');
    const campos = document.querySelectorAll('.required');
    const spans  = document.querySelectorAll('.span-required');
    const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        emailValidate();
        mainPasswordValidate();
    });

    function setError(index){
        campos[index].style.border = '2px solid #e63636';
        spans[index].style.display = 'block';
    }

    function removeError(index){
        campos[index].style.border = '';
        spans[index].style.display = 'none';
    }

    function emailValidate(){
        if(!emailRegex.test(campos[0].value)){
            setError(0);
        }
        else{
            removeError(0);
            <?php $emailValidacao = true;?>
        }
    }

    function mainPasswordValidate(){
        if(campos[1].value.length < 8){
            setError(1);
        }
        else{
            removeError(1);
        }
    }
</script>
</html>