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
    $motivo = $_POST['motivo'];

    $sql_code = "SELECT situacao FROM chaves WHERE numero = '$nChave'";
    $consulta = $mysqli->query($sql_code) or die("Fala na execução do código SQL");

    $dado = mysqli_fetch_object($consulta);
    $status = $dado->situacao;

    if($status == 'livre'){
        $sql_code = "UPDATE chaves SET situacao = 'ocupada' WHERE numero = '$nChave'";
    
        $sql_query = $mysqli->query($sql_code) or die("Fala na execução do código SQL");

        $sql_code = "INSERT INTO registers(tipo, nChave, dataTime, C_matricula, T_nome, 
        T_empresa, T_colabRespon, T_matriRespon, situacao, cadastrante, motivo) VALUES ('$tipo', '$nChave', '$dataTime', '$C_matricula', 
        '$T_nome', '$T_empresa', '$T_colabRespon', '$T_matriRespon', '$situacao', '$cadastrante', '$motivo')";

        $sql_query = $mysqli->query($sql_code) or die("Fala na execução do código SQL");

        echo 'Registro realizado com sucesso!';
    } else{
        echo 'Chaves já em uso!';
    }

?>