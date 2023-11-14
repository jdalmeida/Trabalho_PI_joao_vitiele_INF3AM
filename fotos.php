<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Hotel - Mansão</title>
</head>
<body class="bg-white">
    <header>
        <div class="relative flex flex-wrap items-center justify-between w-full bg-white group py-7 shrink-0 px-4 shadow-md">
            <div class="flex items-center gap-3">
                <img class="h-8" src="./public/img/icon.png"><h1 class="font-bold">Mansão</h1>
            </div>
            <div class="items-center justify-between hidden gap-12 text-black md:flex">
                <a class="text-sm font-normal text-dark-grey-700 hover:text-dark-grey-900" href="./reservas.php">Reservas</a>
                <a class="text-sm font-normal text-dark-grey-700 hover:text-dark-grey-900" href="./index.php">Home</a>
                <a class="text-sm font-normal text-dark-grey-700 hover:text-dark-grey-900" href="./eventos.php">Eventos</a>
                <a class="text-sm font-normal text-dark-grey-700 hover:text-dark-grey-900" href="./contatos.php">Contatos</a>
            </div>
            <div class="items-center hidden gap-8 md:flex">
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
                <a class="text-sm font-normal text-dark-grey-700 hover:text-dark-grey-900" href="./index.php">Home</a>
                <a class="text-sm font-normal text-dark-grey-700 hover:text-dark-grey-900" href="./eventos.php">Eventos</a>
                <a class="text-sm font-normal text-dark-grey-700 hover:text-dark-grey-900" href="./contatos.php">Contatos</a>

                <a class="flex items-center px-4 py-2 text-sm font-bold rounded-xl bg-purple-blue-100 text-purple-blue-600 hover:bg-purple-blue-600 hover:text-white transition duration-300" href="cadastro.php">
                    Cadastre-se
                </a>
            </div>
        </div>
    </header>
    <main>
        <!-- component -->
        <div class="container mx-auto p-4 lg:h-screen flex items-center justify-center">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Blog Entry 1 -->
                <div class="max-w-sm mx-auto relative shadow-md h-[30em] rounded-lg cursor-pointer">
                    <img src="public/img/mansaoVistaPorCima.jpg"
                        alt=""
                        class="w-auto h-full object-cover rounded-lg">
                    <div
                        class="absolute bottom-0 left-0 right-0 h-40 bg-black bg-opacity-50 backdrop-blur text-white p-4 rounded-b-lg">
                        <h1 class="text-2xl font-semibold">A maior Mansão </h1>
                        <p class="mt-2"> Passe as suas férias em uma das maiores mansões do Caribe!</p>
                    </div>
                </div>

                <!-- Blog Entry 2 -->
                <div class="max-w-sm mx-auto relative shadow-md h-[30em] rounded-lg cursor-pointer">
                    <img src="public/img/sacadaCaribe.jpg"
                        alt="Img by Meriç Dağlı https://unsplash.com/@meric"
                        class="w-auto h-full object-cover rounded-lg">
                    <div
                        class="absolute bottom-0 left-0 right-0 h-40 bg-black bg-opacity-50 backdrop-blur text-white p-4 rounded-b-lg">
                        <h1 class="text-2xl font-semibold">Vista Paradisíaca</h1>
                        <p class="mt-2">Vista paradisíaca em frente ao mar, para relexar e curtir!</p>
                    </div>
                </div>

                <!-- Blog Entry 3 -->
                <div class="max-w-sm mx-auto relative shadow-md h-[30em] rounded-lg cursor-pointer cursor-pointer">
                    <img src="public/img/salaCaribe.jpg"
                        alt="Img by Meriç Dağlı https://unsplash.com/@meric"
                        class="w-auto h-full object-cover rounded-lg">
                    <div
                        class="absolute bottom-0 left-0 right-0 h-40 bg-black bg-opacity-50 backdrop-blur text-white p-4 rounded-b-lg">
                        <h1 class="text-2xl font-semibold">Luxo e Conforto</h1>
                        <p class="mt-2">Ambiente confortável e aconchegante para passar com a sua família, e seu companheiro(a) ou amigos!!!</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
</body>
</html>