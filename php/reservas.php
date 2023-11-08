<?php
require "../include/bd.php";

$cpf = mysqli_real_escape_string($bd, $_POST['cpf']);
$dataEntrada = mysqli_real_escape_string($bd, $_POST['dataEntrada']);
$dataSaida = mysqli_real_escape_string($bd, $_POST['dataSaida']);

$sql = "SELECT cod_hospede from hospede WHERE CPF = '$cpf'";
$res = mysqli_query($bd, $sql);

$user = '';

if ($res->num_rows > 0) {
    $row = $res->fetch_assoc();
    $user = $row['cod_hospede'];
}

if ($user != '') {
    $stmt = mysqli_prepare($bd, "INSERT INTO reserva (cod_hospede_fk, dt_entrada, dt_saida) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "iss", $user, $dataEntrada, $dataSaida);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        mysqli_close($bd);
        $loc = "Location: ../index.php";
    } else {
        mysqli_close($bd);
        $_POST["erro"] = $result;
        $loc = "Location: ../erro.php";
    }
} else {
    mysqli_close($bd);
    $loc = "Location: ../cadastro.php";
}

header($loc);
exit;
?>
