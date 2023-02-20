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
    <title>Chaves</title>
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
            <li><a href="./page_chaves.php"><h1 class="sublinhado">Chaves</h1></a></li>
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
                                <th scope="col">Armário</th>
                                <th scope="col">Cor</th>
                            </tr> 
                        </thead>
                        <tbody> 
                            <?php
                                while($historic_data = mysqli_fetch_assoc($result)){
                                    echo "<tr>";
                                        echo "<td>".$historic_data['numero']."</td>";
                                        echo "<td>".$historic_data['local']."</td>";
                                        echo "<td>".$historic_data['copiaReserva']."</td>";
                                        echo "<td>".$historic_data['armario']."</td>";
                                        echo "<td>".$historic_data['cor']."</td>";
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
                                <th scope="col">Armário</th>
                                <th scope="col">Cor</th>
                            </tr> 
                        </thead>
                        <tbody> 
                            <?php
                                while($historic_data = mysqli_fetch_assoc($result)){
                                    if($historic_data['numero'] > 25){
                                        echo "<tr>";
                                            echo "<td>".$historic_data['numero']."</td>";
                                            echo "<td>".$historic_data['local']."</td>";
                                            echo "<td>".$historic_data['copiaReserva']."</td>";
                                            echo "<td>".$historic_data['armario']."</td>";
                                            echo "<td>".$historic_data['cor']."</td>";
                                        echo "</tr>";
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</body>
</html>