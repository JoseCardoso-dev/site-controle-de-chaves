<?php

    include('../validations/validate-session.php');
    include('../write-read-db/read-historic-db.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style-historic.css">
    <link rel="stylesheet" href="../css/style-header.css">
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
            <li><a href="./page_teste.php">Chaves</a></li>
            <li><a href="./logout.php" class="sair" >Sair</a></li>
            </ul>
        </nav>
    </header>


    <article>
        <div class="content">
            <table class="table" cellpadding="4">
                <thead>
                    <tr>
                        <th scope="col">Tipo</th>
                        <th scope="col">Nº Chave</th>
                        <th scope="col">Retirada</th>
                        <th scope="col">C_Matrícula</th>
                        <th scope="col">T_Nome</th>
                        <th scope="col">T_Empresa</th>
                        <th scope="col">T_Colaborador</br>Responsável</th>
                        <th scope="col">T_Matrícula</br>Responsável</th>
                        <th scope="col">Devolução</th>
                        <th scope="col">Excluir</th>
                        
                    </tr>
                    
                </thead>
                <tbody>
                    <?php
                        while($historic_data = mysqli_fetch_assoc($result)){
                            echo "<tr>";
                                echo "<td>".$historic_data['tipo']."</td>";
                                echo "<td>".$historic_data['nChave']."</td>";
                                echo "<td>".date("d/m/Y H:i", strtotime($historic_data['dataTime']))."</td>";
                                echo "<td>".$historic_data['C_matricula']."</td>";
                                echo "<td>".$historic_data['T_nome']."</td>";
                                echo "<td>".$historic_data['T_empresa']."</td>";
                                echo "<td>".$historic_data['T_colabRespon']."</td>";
                                echo "<td>".$historic_data['T_matriRespon']."</td>";

                                if($historic_data['situacao'] == "Pendente"){
                                    echo "<td><div class='acao'>
                                    <a href='../write-read-db/update-resister-db.php?id=$historic_data[id]'>Devolver</a>
                                    </div>";
                                } else{
                                    echo "<td>".date("d/m/Y H:i", strtotime($historic_data['dateTimeDevolucao']))."</td>";
                                }
                                echo "<td><div class='acao-del'><div class='button-delete'>
                                <a href='../write-read-db/delete-register-db.php?id=$historic_data[id]'><img src='../img/excluir.png' alt='Excluir'></a>
                                </div></div></td>";

                            echo "</tr>";
                        }
                    ?>
                    
                </tbody>
            </table>
        </div>
    </article>
</body>
</html>