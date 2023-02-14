<?php

  include('./validations/validate-session.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Página de cadastro </title>
  <link rel="stylesheet" href="./css/style-header.css">
  <link rel="stylesheet" href="./css/style-article.css">
</head>

<body>
  <header id="header">
    <img class="img-home" src="img/logo-scmba-branca.png">
    <h2>Olá, <?php echo $_SESSION['nome']; ?></h2>
    <nav id="nav">
      <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">Menu
        <span id="hamburger"></span>
      </button>
      <ul id="menu" role="menu">
        <li><a href="/">Cadastro</a></li>
        <li><a href="/">Histórico</a></li>
        <li><a href="/">Chaves</a></li>
        <li><a class="sair" href="./logout.php">Sair</a></li>
      </ul>
    </nav>
  </header>

  <article>
      <div class="content">
          <h1>Registrar Emprestimo de Chave 🔑</h1>
          <form method="POST" id="form">
            <div class="box-select">
              <input class="required" type="radio" name="consulta" checked value="1">
              <label for="">Colaborador</label>
              <input class="required" type="radio" name="consulta" value="2">
              <label for="">Terceiro</label>
            </div>

            <div id="colaborador">
              <div class="inputs">
                <div class="input">
                  <input class="required" type="text" required>
                  <span>N° Chave</span>
                </div> 
                <div class="input">
                  <input class="required" type="text" required>
                  <span>Matrícula</span>
                </div>
                <div class="input">
                  <input class="required" id="date" required type="datetime-local" value="<?php date_default_timezone_set("America/Recife"); echo date("Y-m-d H:i");?>">
                  <span>Data / Hora</span>
                </div>
              </div>
            </div>
            <div id="terceiro" hidden>
              <div class="invet-diretion">
                <div class="inputs">
                  <div class="input">
                    <input class="required" type="text" required>
                    <span>Nome</span>
                  </div> 

                  <div class="input">
                    <input class="required" type="text" required>
                    <span>Empresa</span>
                  </div> 
                </div>

                <div class="inputs">
                  <div class="input">
                    <input class="required" type="text" required>
                    <span>Colaborador Responsável</span>
                  </div>

                  <div class="input input-mat-outros">
                    <input class="required" type="text" required>
                    <span>Matrícula</span>
                  </div> 
                </div>

                <div class="inputs last-inputs-outros">
                  <div class="input">
                    <input class="required" type="text" required>
                    <span>N° Chave</span>
                  </div> 

                  <div class="input">
                    <input class="required" id="date" required type="datetime-local" value="<?php date_default_timezone_set("America/Recife"); echo date("Y-m-d H:i");?>">
                    <span>Data / Hora</span>
                  </div>
                </div>

              </div>
            </div>
            
            <div class="title-textarea">
              <p>Motivo / Observação</p>
            </div>
            
            <div class="textarea">
                <textarea required cols="25" rows="5"></textarea>
            </div>

            <button class="button" name="submit" type="submit">Enviar</button>
          </form>
      </div> 
  </article>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="scrip-consulta.js"></script>
<script src="script-menu.js"></script>
<script src="save-data-db.js"></script>
</html>