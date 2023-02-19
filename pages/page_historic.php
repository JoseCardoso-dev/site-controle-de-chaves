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
    <link rel="stylesheet" href="../css/colors.css">
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
            <li><a href="./page_cadastro.php"><h1 class="sublinhado">Cadastro</h1></a></li>
            <li><a href="./page_historic.php"><h1 class="sublinhado">Histórico</h1></a></li>
            <li><a href="/"><h1 class="sublinhado">Chaves</h1></a></li>
            <li><a class="sair" href="../pages/page_logout.php"><h1 class="sublinhado-sair">Sair</h1></a></li>
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
                        <th scope="col">Mais</br>Detalhes</th>
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

                                echo "<td style='padding: 0px;'><div class='button-detalhes'>
                                        <a onclick='openPopup()'>
                                        <img src='../img/icon-eye.png' alt='Mais Detalhes'>
                                        </a></div></td>";

                                echo "<td><div class='acao-del'><div class='button-delete'>
                                <a href='../write-read-db/delete-register-db.php?id=$historic_data[id]'><img src='../img/icon-delete.png' alt='Excluir'></a>
                                </div></div></td>";

                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>

        <dialog>
            <div class="content">
                <h1>Detalhes do Registro🔑</h1>
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

                    <button id='butthon-close-popup' class="button" name="submit" type="submit">Voltar</button>
                </form>
            </div> 
        </dialog>

    </article>
</body>

<script src="../scripts/script-popup.js"></script>
</html>