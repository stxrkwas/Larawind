<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <linl href=".../resources/css/layout.css" rel="stylesheet"/>
</head>

<body>

    @yield('content')

    <!-- Nova Navbar -->
    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600" id="navbar">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <!-- Imagem: -->
                <img src=".img/eteclogo.png" class="h-12" alt="Logo da ETEC Zona Leste"> <!-- class="h-12" define o tamanho da imagem. -->
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Atividade de PW III </span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <!-- "text-lg" é o que define o tamanho da fonte -->
                        <a href="/home" class="block py-2 px-3 text-white text-lg bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/quemsomos" class="block py-2 px-3 text-lg text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Quem Somos</a>
                    </li>
                    <li>
                        <a href="/contato" class="block py-2 px-3 text-lg text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Rodapé-->
    <footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img src=".img/eteclogo.png" class="h-12" alt="Logo ETEC Zona Leste" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Atividade de PW III</span>
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <!--li>
                        <a href="/home" class="hover:underline me-4 md:me-6">About</a>
                    </li-->
                    <li>
                        <a href="/home" class="hover:underline me-4 md:me-6">Home</a>
                    </li>
                    <li>
                        <a href="/quemsomos" class="hover:underline me-4 md:me-6">Quem somos</a>
                    </li>
                    <li>
                        <a href="/contato" class="hover:underline">Contato</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="https://github.com/stxrkwas/Larawind.git" class="hover:underline">Maria Luiza Passo Silva™</a>. All Rights Reserved.</span>
        </div>
    </footer>

</body>

</html>