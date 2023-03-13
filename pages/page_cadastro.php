<?php

  include('../validations/validate-session.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Cadastro </title>
  <link rel="stylesheet" href="../css/style-header.css">
  <link rel="stylesheet" href="../css/style-article.css">
  <link rel="stylesheet" href="../css/colors.css">
</head>

<body>
  <header id="header">
    <img class="img-home" src="../img/logo-scmba-branca.png">
    <h2>Olá, <?php echo $_SESSION['nome']; ?></h2>
    <nav id="nav">
      <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">Menu
        <span id="hamburger"></span>
      </button>
      <ul id="menu" role="menu">
        <?php
          if($_SESSION['adm'] != 0 || $_SESSION['adm-setor'] != 0){
              echo "<li><a href='./page_users.php'><h1 class='sublinhado'>Usuário</h1></a></li>";
          }
        ?>
        <li><a style="background: rgb(66, 65, 65); border-radius: 15px;" href="./page_cadastro.php"><h1 class="sublinhado">Cadastro</h1></a></li>
        <li><a href="./page_historic.php"><h1 class="sublinhado">Histórico</h1></a></li>
        <li><a href="./page_chaves.php"><h1 class="sublinhado">Chaves</h1></a></li>
        <li><a class="sair" href="./page_logout.php"><h1 class="sublinhado-sair">Sair</h1></a></li>
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
              <div class="invet-diretion">
                <div class="inputs">
                  <div class="input">
                      <input class="required" type="text" required>
                      <span>Nome</span>
                  </div>
                </div>
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
                <textarea class="motivo" required cols="25" rows="5"></textarea>
            </div>

            <button class="button" name="submit" type="submit">Enviar</button>
          </form>
      </div> 
  </article>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="../scripts/scrip-consulta.js"></script>
<script src="../scripts/script-menu.js"></script>
<script src="../write-read-db/save-data-db.js"></script>
</html>