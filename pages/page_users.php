<?php

    include('../validations/validate-session.php');
    include('../write-read-db/read-users-db.php');

    //$senhaCriptografada = password_hash("123456789", PASSWORD_DEFAULT);
    //$senhaCriptografada = "$2y$10$/PrVOqfVzWzICuRrp8y9N.lgw6.Cf/kuRXrps/MMAdw3ruioBbzGa";
    //echo $senhaCriptografada;

    //if(password_verify("123456789", $senhaCriptografada)){
    //    echo "          --> Senha Validada!"; 
    //}else{
    //    echo "          --> Senha Incorreta!";
    //}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style-header.css">
    <link rel="stylesheet" href="../css/colors.css">
    <link rel="stylesheet" href="../css/style-users.css">
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
                        echo "<li><a style='background: rgb(66, 65, 65); border-radius: 15px;' href='./page_users.php'><h1 class='sublinhado'>Usuário</h1></a></li>";
                    }
                ?>
                <li><a href="./page_cadastro.php"><h1 class="sublinhado">Cadastro</h1></a></li>
                <li><a href="./page_historic.php"><h1 class="sublinhado">Histórico</h1></a></li>
                <li><a href="./page_chaves.php"><h1 class="sublinhado">Chave</h1></a></li>
                <li><a class="sair" href="./page_logout.php"><h1 class="sublinhado-sair">Sair</h1></a></li>
            </ul>
        </nav>
    </header>

    <article>
        <div class="content">
            <table class="table" cellpadding="4">
                <thead>
                    <tr>
                        <th scope="col">Matrícula</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Sobrenome</th>
                        <th scope="col">Setor</th>
                        <th scope="col">Data de Criação</th>
                        <th scope="col">Ações</th>
                    </tr> 
                </thead>
                <tbody> 
                    <?php
                        while($historic_data = mysqli_fetch_assoc($result)){

                            echo "<tr id='lin{$historic_data['matricula']}'>";
                                echo "<td>".$historic_data['matricula']."</td>";
                                echo "<td>".$historic_data['nome']."</td>";
                                echo "<td>".$historic_data['sobrenome']."</td>";
                                echo "<td>".$historic_data['setor']."</td>";
                                echo "<td>".date("d/m/Y H:i", strtotime($historic_data['data_criacao']))."</td>";
                                echo "<td>........</td>";
                                echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>

</body>
</html> 
