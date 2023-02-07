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
    <h1>Olá, <?php echo $_SESSION['nome']; ?></h1>
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
          <div>
              <div class="box-select">
                  <form>
                      <input type="radio" name="consulta" checked value="1">
                      <label for="">Colaborador</label>
                      <input type="radio" name="consulta" value="2">
                      <label for="">Prestador</label>
                      <input type="radio" name="consulta" value="3">
                      <label for="">Outros</label>
                  </form>
              </div>
              <div id="colaborador">
                  <div class="inputs">
                      <div class="input">
                          <input type="text" required>
                          <span>Número</span>
                      </div> 
                      <div class="input">
                          <input type="text" required>
                          <span>Matrícula</span>
                      </div>
                      <div class="input">
                          <input id="date" required type="datetime-local" value="<?php date_default_timezone_set("America/Recife"); echo date("Y-m-d H:i");?>">
                          <span>Data / Hora</span>
                      </div>
                  </div>
              </div>
              <div id="prestador" hidden>
                  DIV 2
              </div>
              <div id="outros" hidden>
                  DIV 3
              </div>
              
              <div class="title-textarea">
                <p>Motivo / Observação</p>
              </div>
              
              <div class="textarea">
                  <textarea required cols="25" rows="10"></textarea>
              </div>
              
          </div>

          <button class="button" type="submit">Enviar</button>
      </div>
  </article>


  
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="scrip-consulta.js"></script>
<script src="./script.js"></script>
</html>