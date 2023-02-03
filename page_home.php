<?php

    include('validations/validate-session.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Página Inicial</title>
</head>
<body>
    <h1>Bem Vindo!!<?php echo $_SESSION['nome'];?>!</h1>

    <p>
        <a href="logout.php">Sair</a>
    </p>
</body>
</html>