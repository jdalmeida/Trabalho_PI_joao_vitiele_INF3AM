<?php
require "./include/bd.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idReserva = $_POST['cod_reserva_pk'];
    $novaDataEntrada = $_POST['nova_data_entrada'];
    $novaDataSaida = $_POST['nova_data_saida'];

    $sql_editar_reserva = "UPDATE reserva SET dt_entrada = '$novaDataEntrada', dt_saida = '$novaDataSaida' WHERE cod_reserva_pk = '$idReserva'";
    mysqli_query($bd, $sql_editar_reserva);
    
    header("Location: admin.php");
    exit;
}

$idReserva = $_GET['cod_reserva_pk'];
$sql_reserva = "SELECT * FROM reserva WHERE cod_reserva_pk = '$idReserva'";
$result_reserva = mysqli_query($bd, $sql_reserva);
$row_reserva = mysqli_fetch_assoc($result_reserva);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Editar Reserva</title>
</head>
<body class="bg-gray-100 font-sans">
    <div class="container mx-auto p-8">
        <h1 class="text-4xl font-semibold mb-8 text-gray-800">Editar Reserva</h1>

        <form method="post" action="editar_reserva.php">
            <input type="hidden" name="cod_reserva_pk" value="<?= $row_reserva['cod_reserva_pk'] ?>">
            <label for="nova_data_entrada">Nova Data de Entrada:</label>
            <input type="date" name="nova_data_entrada" value="<?= $row_reserva['dt_entrada'] ?>" required>
            <label for="nova_data_saida">Nova Data de Saída:</label>
            <input type="date" name="nova_data_saida" value="<?= $row_reserva['dt_saida'] ?>" required>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-semibold py-2 px-4 rounded">Salvar Edição</button>
        </form>
    </div>
</body>
</html>
