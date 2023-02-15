<?php

    include('../validations/validate-session.php');
    include('../write-read-db/read-historic-db.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style-header.css">
    <link rel="stylesheet" href="../css/style-historic.css">
    <title>Histórico</title>
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
        <li><a href="./page_cadastro.php">Cadastro</a></li>
        <li><a href="./page_historic.php">Histórico</a></li>
        <li><a href="/">Chaves</a></li>
        <li><a href="./logout.php" class="sair" >Sair</a></li>
      </ul>
    </nav>
  </header>

  <article>
    <div class="content">
      <div>
        <table border-bottom="5px" id="table" cellspacing="10" cellpadding="4">
          <thead>
              <tr border1="1">
                <th scope="col">ID</th>
                <th scope="col">Tipo</th>
                <th scope="col">Nº Chave</th>
                <th scope="col">Data e Hora</th>
                <th scope="col">C_Matrícula</th>
                <th scope="col">T_Nome</th>
                <th scope="col">T_Empresa</th>
                <th scope="col">T_Colaborador</br>Responsável</th>
                <th scope="col">T_Matrícula</br>Responsável</th>
                <th scope="col">Ação</th>
              </tr>
          </thead>
            <tbody>
              <?php
                while($historic_data = mysqli_fetch_assoc($result)){
                  echo "<tr>";
                    echo "<td>".$historic_data['id']."</td>";
                    echo "<td>".$historic_data['tipo']."</td>";
                    echo "<td>".$historic_data['nChave']."</td>";
                    echo "<td>".$historic_data['dataTime']."</td>";
                    echo "<td>".$historic_data['C_matricula']."</td>";
                    echo "<td>".$historic_data['T_nome']."</td>";
                    echo "<td>".$historic_data['T_empresa']."</td>";
                    echo "<td>".$historic_data['T_colabRespon']."</td>";
                    echo "<td>".$historic_data['T_matriRespon']."</td>";
                    echo "<td>Ações</td>";
                  echo "</tr>";
                }
              ?>
          </tbody>
        </table>
      </div>
    </div>
  </article>


</body>
</html>