<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Hotel - Mansão</title>
</head>
<body class="bg-black">
    <header>
        <div class="relative flex flex-wrap items-center justify-between w-full bg-white group py-7 shrink-0 px-4 shadow-md">
            <div class="flex items-center gap-3">
                <img class="h-8" src="./public/img/icon.png"><h1 class="font-bold">Mansão</h1>
            </div>
            <div class="items-center justify-between hidden gap-12 text-black md:flex">
                <a class="text-sm font-normal text-dark-grey-700 hover:text-dark-grey-900" href="./index.php">Home</a>
                <a class="text-sm font-normal text-dark-grey-700 hover:text-dark-grey-900" href="./fotos.php">Fotos</a>
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
                <a class="text-sm font-normal text-dark-grey-700 hover:text-dark-grey-900" href="./index.php">Home</a>
                <a class="text-sm font-normal text-dark-grey-700 hover:text-dark-grey-900" href="./fotos.php">Fotos</a>
                <a class="text-sm font-normal text-dark-grey-700 hover:text-dark-grey-900" href="./eventos.php">Eventos</a>
                <a class="text-sm font-normal text-dark-grey-700 hover:text-dark-grey-900" href="./contatos.php">Contatos</a>

                <a class="flex items-center px-4 py-2 text-sm font-bold rounded-xl bg-purple-blue-100 text-purple-blue-600 hover:bg-purple-blue-600 hover:text-white transition duration-300" href="cadastro.php">
                    Cadastre-se
                </a>
            </div>
        </div>
    </header>
    <main>
        <div class="h-screen w-screen" style="background: url('./public/img/Mansao.jpg'); background-size: cover; background-position: center center;">
            <div class="flex flex-col items-center flex-1 h-full justify-center px-4 sm:px-0">
                <div class="flex rounded-lg shadow-lg w-full sm:w-3/4 lg:w-1/2 bg-white sm:mx-0" style="height: 500px">
                    <div class="flex flex-col w-full md:w-1/2 p-4">
                        <div class="flex flex-col flex-1 justify-center mb-8">
                            <h1 class="text-4xl text-center font-thin">Faça Sua Reserva</h1>
                            <div class="w-full mt-4">
                                <form class="form-horizontal w-3/4 mx-auto" method="POST" action="./php/reservas.php">
                                    <div class="flex flex-col mt-4">
                                        <label class="text-gray-500">CPF</label>
                                        <input id="cpf" type="text" class="flex-grow h-8 px-2 rounded border border-grey-400" name="cpf" required>
                                    </div>
                                    <div class="flex flex-col mt-4">
                                        <label class="text-gray-500">Data De Entrada</label>
                                        <input id="dataEntrada" type="date" class="flex-grow h-8 px-2 rounded border border-grey-400 placeholder:text-slate-400" name="dataEntrada" required placeholder="Data de Entrada">                                        
                                    </div>
                                    <div class="flex flex-col mt-4">
                                        <label class="text-gray-500">Data De Saída</label>
                                        <input id="dataSaida" type="date" class="flex-grow h-8 px-2 rounded border border-grey-400 placeholder:text-slate-400" name="dataSaida" required placeholder="Data de Saida">                                        
                                    </div>
                                    <div class="flex flex-col mt-8">
                                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-semibold py-2 px-4 rounded">
                                            Reserve
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block md:w-1/2 rounded-r-lg" style="background: url('./public/img/icon.png'); background-size: cover; background-position: center center;"></div>
                </div>
            </div>
        </div>
    </main>    
</body>
</html>