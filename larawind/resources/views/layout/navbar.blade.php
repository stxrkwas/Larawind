<!-- Indicando o formato do arquivo -->
<!DOCTYPE html>

<!-- Definindo o idioma da página -->
<html lang="pt-br">

<!-- Cabeçalho -->
<head>

    <!-- Tipo de caracteres -->
    <meta charset="UTF-8">

    <!-- Indica que largura da página proporcional ao tamanho da tela e define o zoom inicial. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Título da página, aparece na barra de navegação -->
    <title>Layout</title>

    <!-- Links de refeência e script Flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

<!-- Fim do cabeçalho -->
</head>

<!-- Corpo do HTML -->
<body>

    <!-- Barra de navegação | fixed: deixa a navbar fixada no topo da tela -->
    <nav class="bg-white dark:bg-gray-900 w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600" id="navbar">

        <!-- Div que contém os elementos da navbar -->
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

            <!-- Link na imagem -->
            <a href="https://github.com/stxrkwas/Larawind.git" class="flex items-center space-x-3 rtl:space-x-reverse">

                <!-- Imagem: -->
                <img src=".img/eteclogo.png" class="h-12" alt="Logo da ETEC Zona Leste"> <!-- class="h-12" define o tamanho da imagem. -->

                <!-- Título da barra -->
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Atividade de PW III </span>

            </a>

            <!-- Botão de expansão da barra-->
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 
            rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 
            dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                
                <!-- Texto para acessiblidade -->
                <span class="sr-only">Open main menu</span>

                <!-- Elemento raiz da imagem vetorial escalável (SVG) -->
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    
                    <!-- Este elemento define a forma real do botão usando comandos de caminho.  -->
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                
                </svg>
            
            </button>

            <!-- Div dos atalhos da barra de navegação  -->
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-default">

                <!-- Criando a lista de atalhos -->
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse 
                md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    
                    <!-- 1º item - tela inicial -->
                    <li>
                        
                        <!-- "text-lg" é o que define o tamanho da fonte -->
                        <a href="/home" class="block py-2 px-3 text-white text-lg bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white 
                        md:dark:text-blue-500" aria-current="page">Home</a>
                    </li>

                    <!-- 2º item - Quem somos -->
                    <li>
                        <a href="/quemsomos" class="block py-2 px-3 text-lg text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 
                        md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white 
                        md:dark:hover:bg-transparent">Quem Somos</a>
                    </li>

                    <!-- 3º item - Contato -->
                    <li>
                        <a href="/contato" class="block py-2 px-3 text-lg text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0
                         md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white 
                         md:dark:hover:bg-transparent">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('navbar')

<!-- Fim do corpo da página -->
</body>

<!-- Fim do arquivo -->
</html>