<?php

    include('../validations/validate-session.php');
    include('../write-read-db/read-chaves-db.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style-header.css">
    <link rel="stylesheet" href="../css/style-chaves.css">
    <link rel="stylesheet" href="../css/colors.css">
    <link rel="stylesheet" href="../css/style-popup.css">
    <title>Chaves</title>
</head>
<body>
    <header id="header">
        <img class="img-home" src="../img/logo-scmba-branca.png">
        <h2>Olá, <?php $nome = $_SESSION['nome']; echo $nome; ?></h2>
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
            <li><a href="./page_cadastro.php"><h1 class="sublinhado">Cadastro</h1></a></li>
            <li><a href="./page_historic.php"><h1 class="sublinhado">Histórico</h1></a></li>
            <li><a style="background: rgb(66, 65, 65); border-radius: 15px;" href="./page_chaves.php"><h1 class="sublinhado">Chaves</h1></a></li>
            <li><a class="sair" href="./page_logout.php"><h1 class="sublinhado-sair">Sair</h1></a></li>
        </ul>
        </nav>
    </header>

    <article>
        <div class="content">
            <div class="invet-diretion">
                <div class="div-table">
                    <table class="table" cellpadding="4">
                        <thead>
                            <tr>
                                <th scope="col">Número</th>
                                <th scope="col">Local</th>
                                <th scope="col">Copia Reserva</th>
                                <th scope="col">Ação</th>
                                <th scope="col">Status</th>
                            </tr> 
                        </thead>
                        <tbody> 
                            <?php
                                $matricula = $_SESSION['matricula'];
                                
                                while($historic_data = mysqli_fetch_assoc($result)){
                                    $nChave = $historic_data['numero'];

                                    echo "<tr>";
                                        echo "<td>".$historic_data['numero']."</td>";
                                        echo "<td>".$historic_data['local']."</td>";
                                        echo "<td>".$historic_data['copiaReserva']."</td>";
                                        
                                        if($historic_data['situacao'] == 'livre'){
                                            echo "<td><div class='acao'>
                                            <a onclick='openPopup($nChave)'>
                                            Pegar</a></div></td>";

                                            echo "<td>🟢</td>";
                                        } else{
                                            echo "<td> </td>";

                                            echo "<td>🔴</td>";
                                        }
                                    echo "</tr>";
                                    if($historic_data['numero'] == 25){
                                        break;
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div id="linha-vertical"></div>
                <div class="div-table">
                    <table class="table" cellpadding="4">
                        <thead>
                            <tr>
                                <th scope="col">Número</th>
                                <th scope="col">Local</th>
                                <th scope="col">Copia Reserva</th>
                                <th scope="col">Ação</th>
                                <th scope="col">Status</th>
                            </tr> 
                        </thead>
                        <tbody> 
                            <?php
                                while($historic_data = mysqli_fetch_assoc($result)){
                                    $nChave = $historic_data['numero'];
                                    if($historic_data['numero'] > 25){
                                        echo "<tr>";
                                            echo "<td>".$historic_data['numero']."</td>";
                                            echo "<td>".$historic_data['local']."</td>";
                                            echo "<td>".$historic_data['copiaReserva']."</td>";
                                            
                                            if($historic_data['situacao'] == 'livre'){
                                                echo "<td><div class='acao'>
                                                <a onclick='openPopup($nChave)'>
                                                Pegar</a></div></td>";

                                                echo "<td>🟢</td>";
                                            } else{
                                                echo "<td> </td>";

                                                echo "<td>🔴</td>";
                                            }
                                        echo "</tr>";
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <dialog>
        
            <h1>Registrar Emprestimo de Chave 🔑</h1>
            <form action="" id="form">
                <div class="inputs">
                    <div class="input">
                        <input disabled class="required inputpopup" type="text" value="<?php echo $nome ?>" required>
                        <span>Nome</span>
                    </div>
                    <div class="invet-diretion">
                        <div class="input">
                            <input disabled class="required inputpopup" type="text" required>
                            <span>N° Chave</span>
                        </div> 
                        <div class="input">
                            <input disabled class="required inputpopup" type="text" value="<?php echo $matricula ?>"  required>
                            <span>Matrícula</span>
                        </div>
                        <div class="input">
                            <input class="required inputpopup" id="date" required type="datetime-local" value="<?php date_default_timezone_set("America/Recife"); echo date("Y-m-d H:i");?>">
                            <span>Data / Hora</span>
                        </div>
                    </div>
                </div>
            
                <div class="title-textarea">
                    <p>Motivo / Observação</p>
                </div>
                
                <div class="textarea">
                    <textarea required class="inputpopup" cols="25" rows="5"></textarea>
                </div>

                <button type="submit" class="button" onclick="closePopup()" >Voltar</button>
            </form>
        </dialog>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="../scripts/script-menu.js"></script>
<script src="../scripts/scrip-popup-chaves.js"></script>
</html>