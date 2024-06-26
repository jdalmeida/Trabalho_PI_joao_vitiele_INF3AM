<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Hotel - Mansão</title>
</head>

<?php
session_start();

// Verificar se a sessão está ativa
if (isset($_SESSION['user_id'])) {
    $sessaoAtiva = true;
} else {
    $sessaoAtiva = false;
}
?>

<body class="bg-black">
    <nav>
        <div class="relative flex flex-wrap items-center justify-between w-full bg-white group py-7 shrink-0 px-4 shadow-md">
            <div class="flex items-center gap-3">
                <img class="h-8" src="./public/img/icon.png">
                <h1 class="font-bold">Mansão</h1>
            </div>
            <div class="items-center justify-between hidden gap-12 text-black md:flex">
                <a class="text-sm font-normal text-dark-grey-700 hover:text-dark-grey-900" href="./reservas.php">Reservas</a>
                <a class="text-sm font-normal text-dark-grey-700 hover:text-dark-grey-900" href="./fotos.php">Fotos</a>
                <a class="text-sm font-normal text-dark-grey-700 hover:text-dark-grey-900" href="./eventos.php">Eventos</a>
                <a class="text-sm font-normal text-dark-grey-700 hover:text-dark-grey-900" href="./contatos.php">Contatos</a>
            </div>
            <div class="items-center hidden gap-8 md:flex botao-cadastro">
                <a class="flex items-center px-4 py-2 text-sm font-bold rounded-xl bg-purple-blue-100 text-purple-blue-600 hover:bg-purple-blue-600 hover:text-white transition duration-300" href="cadastro.php">
                    Cadastre-se
                </a>
            </div>
            <button onclick="(() => { this.closest('.group').classList.toggle('open')})()" class="flex md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M3 8H21C21.2652 8 21.5196 7.89464 21.7071 7.70711C21.8946 7.51957 22 7.26522 22 7C22 6.73478 21.8946 6.48043 21.7071 6.29289C21.5196 6.10536 21.2652 6 21 6H3C2.73478 6 2.48043 6.10536 2.29289 6.29289C2.10536 6.48043 2 6.73478 2 7C2 7.26522 2.10536 7.51957 2.29289 7.70711C2.48043 7.89464 2.73478 8 3 8ZM21 16H3C2.73478 16 2.48043 16.1054 2.29289 16.2929C2.10536 16.4804 2 16.7348 2 17C2 17.2652 2.10536 17.5196 2.29289 17.7071C2.48043 17.8946 2.73478 18 3 18H21C21.2652 18 21.5196 17.8946 21.7071 17.7071C21.8946 17.5196 22 17.2652 22 17C22 16.7348 21.8946 16.4804 21.7071 16.2929C21.5196 16.1054 21.2652 16 21 16ZM21 11H3C2.73478 11 2.48043 11.1054 2.29289 11.2929C2.10536 11.4804 2 11.7348 2 12C2 12.2652 2.10536 12.5196 2.29289 12.7071C2.48043 12.8946 2.73478 13 3 13H21C21.2652 13 21.5196 12.8946 21.7071 12.7071C21.8946 12.5196 22 12.2652 22 12C22 11.7348 21.8946 11.4804 21.7071 11.2929C21.5196 11.1054 21.2652 11 21 11Z" fill="black"></path>
                </svg>
            </button>
            <div class="absolute flex md:hidden transition-all duration-300 ease-in-out flex-col items-start shadow-main justify-center w-full gap-3 overflow-hidden bg-white max-h-0 group-[.open]:py-4 px-4 rounded-2xl group-[.open]:max-h-64 top-full">
                <a class="text-sm font-normal text-dark-grey-700 hover:text-dark-grey-900" href="./reservas.php">Reservas</a>
                <a class="text-sm font-normal text-dark-grey-700 hover:text-dark-grey-900" href="./fotos.php">Fotos</a>
                <a class="text-sm font-normal text-dark-grey-700 hover:text-dark-grey-900" href="./eventos.php">Eventos</a>
                <a class="text-sm font-normal text-dark-grey-700 hover:text-dark-grey-900" href="./contatos.php">Contatos</a>

                <a class="flex items-center px-4 py-2 text-sm font-bold rounded-xl bg-purple-blue-100 text-purple-blue-600 hover:bg-purple-blue-600 hover:text-white transition duration-300 botao-cadastro" href="cadastro.php">
                    Cadastre-se
                </a>
            </div>
        </div>
    </nav>
    <main>
        <div class="flex bg-white" style="height:600px;">
            <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800 md:text-4xl">Encontre O Maior <span class="text-indigo-600">Conforto</span></h2>
                    <p class="mt-2 text-sm text-gray-500 md:text-base">Bem-vindo à Mansão, um refúgio de luxo e elegância. Com quartos luxuosos, um restaurante premiado e um spa de classe mundial, oferecemos uma experiência única para relaxar e desfrutar. Seja para uma escapadela romântica, viagem de negócios ou evento especial, a Mansão redefine o luxo. Bem-vindo ao nosso mundo de sofisticação.</p>
                    <div class="flex justify-center lg:justify-start mt-6">
                        <a class="px-4 py-3 bg-gray-900 text-gray-200 text-xs font-semibold rounded hover:bg-gray-800" href="./reservas.php">Faça Sua Reserva</a>
                        <a class="mx-4 px-4 py-3 bg-gray-300 text-gray-900 text-xs font-semibold rounded hover:bg-gray-400" href="./contatos.php">Entre Em Contato</a>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block lg:w-1/2" style="clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
                <div class="h-full object-cover" style="background-image: url(./public/img/Mansao.jpg)">
                    <div class="h-full bg-black opacity-25"></div>
                </div>
            </div>
        </div>
    </main>
</body>
<script>
    var sessaoAtiva = <?php echo json_encode($sessaoAtiva); ?>;
    document.addEventListener("DOMContentLoaded", function() {
        if (sessaoAtiva) {
            // Se a sessão estiver ativa, oculte os botões de cadastro
            var botoesCadastro = document.querySelectorAll(".botao-cadastro");
            for (var i = 0; i < botoesCadastro.length; i++) {
                botoesCadastro[i].style.display = "none";
            }
        }
    });
</script>

</html>