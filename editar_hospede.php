<?php
require "./include/bd.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codHospede = $_POST['cod_hospede'];
    $novoNomeHospede = $_POST['novo_nome_hospede'];

    $sql_editar_hospede = "UPDATE hospede SET nome = '$novoNomeHospede' WHERE cod_hospede = '$codHospede'";
    mysqli_query($bd, $sql_editar_hospede);
    
    header("Location: admin.php");
    exit;
}

$codHospede = $_GET['cod_hospede'];
$sql_hospede = "SELECT * FROM hospede WHERE cod_hospede = '$codHospede'";
$result_hospede = mysqli_query($bd, $sql_hospede);
$row_hospede = mysqli_fetch_assoc($result_hospede);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Editar Hóspede</title>
</head>
<body class="bg-gray-100 font-sans">
    <div class="container mx-auto p-8">
        <h1 class="text-4xl font-semibold mb-8 text-gray-800">Editar Hóspede</h1>

        <form method="post" action="">
            <input type="hidden" name="cod_hospede" value="<?= $row_hospede['cod_hospede'] ?>">
            <label for="novo_nome_hospede">Novo Nome do Hóspede:</label>
            <input type="text" name="novo_nome_hospede" value="<?= $row_hospede['nome'] ?>" required>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-semibold py-2 px-4 rounded">Salvar Edição</button>
        </form>
    </div>
</body>
</html>
