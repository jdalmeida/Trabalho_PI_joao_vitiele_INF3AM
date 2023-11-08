<?php
require "../include/bd.php";

$email = $_POST['email'];
$nome = $_POST['nome'];
$dataNascimento = $_POST['dataNascimento'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

$sql = "INSERT INTO hospede (email, nome, dt_nasc, CPF, senha) VALUES ('$email', '$nome', '$dataNascimento', '$cpf', '$senha')";
mysqli_query($bd, $sql);

$sql = "SELECT cod_hospede from hospede WHERE CPF = '$cpf'";
$res = mysqli_query($bd, $sql);

if($res->num_rows > 0) {
    $row = $res->fetch_assoc();
    $user_id = $row['cod_hospede'];
    $_SESSION['user_id'] = $user_id;
}
mysqli_close($bd);

session_start();

// Verificar se a sessão está ativa
if (isset($_SESSION['user_id'])) {
    $sessaoAtiva = true;
} else {
    $sessaoAtiva = false;
}
header("Location: ../index.php");
exit;
?>
