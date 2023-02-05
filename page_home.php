<?php

    include("validations/validate-session.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styleHome.css">
    <title>Página inicial</title>
</head>
<body>
    <div class="page">
        <div class="colum-1">
            <div>
                <form action="logout.php">
                    <button on class="btn-sair" type="submit">Sair</button>
                </form>
            </div>
            <div>
                <form action="logout.php">
                    <button class="button" type="submit">Chaves</button>
                </form>
            </div>
            <div>
                <form action="logout.php">
                    <button class="button" type="submit">Histórico</button>
                </form>
            </div>
        </div>
        <div class="colum-2">
            <h2>Bem Vindo, <?php echo $_SESSION['nome']; ?>.</h2>
            <div class="content">
                <h1>Registrar Emprestimo de Chave 🔑</h1>
                <form id="form">
                    <div>
                        <input type="text" placeholder="Número da Chaves" class="inputs required" oninput="nameValidate()">
                        <span class="span-required">Nome deve ter no mínimo 3 caracteres</span>
                    </div>
                    <div>
                        <input type="email" placeholder="Digite seu melhor email" class="inputs required" oninput="emailValidate()">
                        <span class="span-required">....</span>
                    </div>
                    <div>
                        <input type="password" placeholder="Senha" class="inputs required" oninput="mainPasswordValidate()">
                        <span class="span-required">....</span>
                    </div>
                    <div>
                        <input type="password" placeholder="Senha" class="inputs required" oninput="mainPasswordValidate()">
                        <span class="span-required">....</span>
                    </div>


                    <div>
                        <div>
                        <form>
                            <input type="radio" name="consulta" checked value="1">Colaborador
                            <input type="radio" name="consulta" value="2">Prestador
                            <input type="radio" name="consulta" value="3">Outros
                        </form>
                        </div>
                        <div id="colaborador">
                            <div class="colum2-lim1">
                                <div class="input">
                                    <input type="text" required="required">
                                    <span>Número da Chave</span>
                                </div> 
                                <div class="input">
                                    <input type="text" required="required">
                                    <span>Matrícula do Comodatário</span>
                                </div>
                                <div class="date">
                                    <p for="date">Data / Hora:</p>
                                    <input id="date" type="datetime-local" value="<?php date_default_timezone_set("America/Recife"); echo date("Y-m-d H:i");?>">
                                </div>  
                            </div>
                        </div>
                        <div id="prestador" hidden>
                            DIV 2
                        </div>
                        <div id="outros" hidden>
                            DIV 3
                        </div>
                    </div>

                    
                    

                    

                    <textarea class="inputs" name="descricao" id="descricao" cols="25" rows="10" placeholder="Fale um pouco sobre você..."></textarea>
            
                    <button class="button" type="submit">Enviar</button>
                </form>
            </div>
        </div>
        <div class="colum-3">
            <img class="img-home" src="img/logo-scmba-branca.png"></div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="scrip-consulta.js"></script>
</html>