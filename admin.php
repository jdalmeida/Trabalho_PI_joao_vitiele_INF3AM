<?php
require "./include/bd.php";

function excluirReservas($bd, $codHospede)
{
    $sql = "DELETE FROM reserva WHERE cod_hospede_fk = '$codHospede'";
    mysqli_query($bd, $sql);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['excluir_reserva'])) {
        $idReserva = $_POST['cod_reserva_pk'];
        $sql_excluir_reserva = "DELETE FROM reserva WHERE cod_reserva_pk = '$idReserva'";
        mysqli_query($bd, $sql_excluir_reserva);
    }

    if (isset($_POST['excluir_hospede'])) {
        $codHospede = $_POST['cod_hospede'];
        excluirReservas($bd, $codHospede);
        $sql_excluir_hospede = "DELETE FROM hospede WHERE cod_hospede = '$codHospede'";
        mysqli_query($bd, $sql_excluir_hospede);
    }
}

$sql_hospedes = "SELECT * FROM hospede";
$result_hospedes = mysqli_query($bd, $sql_hospedes);

$sql_reservas = "SELECT reserva.*, hospede.nome as nome_hospede FROM reserva JOIN hospede ON reserva.cod_hospede_fk = hospede.cod_hospede";
$result_reservas = mysqli_query($bd, $sql_reservas);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard Admin</title>
</head>
<body class="bg-gray-100 font-sans">
    <div class="container mx-auto p-8">
        <h1 class="text-4xl font-semibold mb-8 text-gray-800">Dashboard Admin</h1>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold mb-4 text-gray-800">Lista de Hóspedes</h2>
                <ul>
                    <?php while ($row_hospede = mysqli_fetch_assoc($result_hospedes)) : ?>
                        <li class="mb-2 text-gray-700">
                            <?= $row_hospede['nome'] ?>
                            <form method="post" action="">
                                <input type="hidden" name="cod_hospede" value="<?= $row_hospede['cod_hospede'] ?>">
                                <button type="submit" name="excluir_hospede" class="text-red-500 ml-2 hover:underline">Excluir</button>
                                <a href="editar_hospede.php?cod_hospede=<?= $row_hospede['cod_hospede'] ?>" class="text-blue-500 ml-2 hover:underline">Alterar</a>
                            </form>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold mb-4 text-gray-800">Reservas</h2>
                <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="py-2 px-4 border">Hóspede</th>
                            <th class="py-2 px-4 border">Data de Entrada</th>
                            <th class="py-2 px-4 border">Data de Saída</th>
                            <th class="py-2 px-4 border">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row_reserva = mysqli_fetch_assoc($result_reservas)) : ?>
                            <tr>
                                <td class="py-2 px-4 border"><?= $row_reserva['nome_hospede'] ?></td>
                                <td class="py-2 px-4 border"><?= $row_reserva['dt_entrada'] ?></td>
                                <td class="py-2 px-4 border"><?= $row_reserva['dt_saida'] ?></td>
                                <td class="py-2 px-4 border">
                                    <form method="post" action="">
                                        <input type="hidden" name="cod_reserva_pk" value="<?= $row_reserva['cod_reserva_pk'] ?>">
                                        <button type="submit" name="excluir_reserva" class="text-red-500 hover:underline">Excluir</button>
                                        <a href="editar_reserva.php?cod_reserva_pk=<?= $row_reserva['cod_reserva_pk'] ?>" class="text-blue-500 ml-2 hover:underline">Alterar</a>
                                    </form>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
