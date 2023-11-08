<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.tailwindcss.com/2.2.19/tailwind.min.css" rel="stylesheet">
    <title>Página de Erro</title>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md text-center">
        <h1 class="text-4xl text-red-500 font-bold mb-4">Erro!</h1>
        <p class="text-lg text-gray-700 mb-4">Desculpe, ocorreu um erro inesperado.</p>
        <a href="index.php" class="text-blue-500 hover:underline">Voltar à página inicial</a>

        <p><?php echo $_POST["erro"]; ?></p>
    </div>
</body>
</html>
