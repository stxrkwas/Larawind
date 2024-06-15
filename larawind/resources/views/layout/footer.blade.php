<!-- Indicando o formato do arquivo -->
<!DOCTYPE html>

<!-- Definindo o idioma da página -->
<html lang="en">

<!-- Cabeçalho -->
<head>

    <!-- Tipo de caracteres -->
    <meta charset="UTF-8">

    <!-- Indica que largura da página proporcional ao tamanho da tela e define o zoom inicial. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Título da página, aparece na barra de navegação -->
    <title>Footer</title>

<!-- Fim do cabeçalho -->
</head>

<!-- Corpo do HTML -->
<body>

    <!-- Modelo do conteúdo que será utilizado em outras páginas -->
    @yield('footer')

    <!-- Rodapé-->
    <footer class="bg-gray-50 rounded-lg shadow dark:bg-gray-900 m-4">

        <!-- Div que alinha o rodapé -->
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">

            <!-- Div do logo, nome da página e atalhos  -->
            <div class="sm:flex sm:items-center sm:justify-between">

                <!-- Link da imagem -->
                <a href="https://github.com/stxrkwas/Larawind.git" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">

                    <!-- Imagem -->
                    <img src=".img/eteclogo.png" class="h-12" alt="Logo ETEC Zona Leste" />

                    <!-- Nome da página -->
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Atividade de PW III</span>
                </a>

                <!-- Lista de atalhos -->
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">

                    <!-- 1º atalho - Página inicial -->
                    <li>
                        <a href="/home" class="hover:underline me-4 md:me-6">Home</a>
                    </li>

                    <!-- 2º atalho - Quem somos -->
                    <li>
                        <a href="/quemsomos" class="hover:underline me-4 md:me-6">Quem somos</a>
                    </li>

                    <!-- 3º atalho - Contato -->
                    <li>
                        <a href="/contato" class="hover:underline">Contato</a>
                    </li>

                <!-- Fim da lista-->
                </ul>

            <!-- Fim da div -->
            </div>

            <!-- Linha -->
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />

            <!-- Rotulo de autoria da página -->
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="https://github.com/stxrkwas/Larawind.git" class="hover:underline">Maria Luiza Passo Silva™</a>. All Rights Reserved.</span>
        
        <!-- Fim da div principal -->
        </div>

    <!-- Fim do rodapé -->
    </footer>
   
<!-- Fim do corpo da página -->
</body>

<!-- Fim do arquivo -->
</html>