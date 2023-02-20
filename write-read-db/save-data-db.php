<?php

    include('../conexao-mysql.php');
    include('../validations/validate-session.php');

    $tipo = $_POST['tipo'];
    $nChave = $_POST['nChave'];
    $dataTime = $_POST['dataTime'];
    $C_matricula = $_POST['C_matricula'];
    $T_nome = $_POST['T_nome'];
    $T_empresa = $_POST['T_empresa'];
    $T_colabRespon = $_POST['T_colabRespon'];
    $T_matriRespon = $_POST['T_matriRespon'];
    $situacao = $_POST['situacao'];
    $cadastranteNome = $_SESSION['nome'];
    $cadastranteMatricula = $_SESSION['matricula'];
    $cadastrante = "$cadastranteNome ($cadastranteMatricula)";
    $cadastrante = $_SESSION['nome']." (".$_SESSION['matricula'].")";
    $motivo = $_POST['motivo'];

    $sql_code = "INSERT INTO registers(tipo, nChave, dataTime, C_matricula, T_nome, 
    T_empresa, T_colabRespon, T_matriRespon, situacao, cadastrante, motivo) VALUES ('$tipo', '$nChave', '$dataTime', '$C_matricula', 
    '$T_nome', '$T_empresa', '$T_colabRespon', '$T_matriRespon', '$situacao', '$cadastrante', '$motivo')";

    $sql_query = $mysqli->query($sql_code) or die("Fala na execução do código SQL");

    echo 'Registro realizado com sucesso!';

?>