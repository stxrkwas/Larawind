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
    <title>Home page</title>

<!-- Fim do cabeçalho -->
</head>

<!-- Corpo da página -->
<body>

    <!-- Estilização dos elementos da página -->
    <style>

        /* Div1 */
        #div1{

            /* Margem superior */
            padding-top:80px;

        }

    </style>

    <!-- Extende o arquivo 'layout' da pasta 'layout' -->
    @extends('layout.layout')

    <!-- Seção, conteúdo que fica dentro da extensão de 'content' de 'layout.layout' -->
    @section('content')

    <!-- Div container: -->
    <div class="content-center py-9" id="div1">

        <!-- Título -->
        <h1 class="mb-4 my-6 text-4xl text-center font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
            Nunc viverra imperdiet enim.</h1>

        <!-- Parágrafo:  -->
        <p class="mb-6 text-lg font-normal text-center text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
            Maecenas porttitor congue massa. <br>Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero,
            sit amet commodo magna eros quis urna.</p>

        <!-- Div do botão:  -->
        <div class="text-center mb-4">
            <a href="quemsomos" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-yellow-300 rounded-lg 
                hover:bg-yellow-400 focus:ring-4 focus:ring-yellow-200 dark:focus:ring-yellow-500">Saiba mais

                <!-- Elemento raiz da imagem vetorial escalável (SVG) -->
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">

                    <!-- Este elemento define a forma real do botão usando comandos de caminho.  -->
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>

        <!-- Div da imagem | px: espaçamento horizontal, py: espaçamento vertical -->
        <div class="mt-5 ml-3 px-9 py-5 content-center">

            <!-- Imagem: -->
            <img class="relative h-auto max-w-lg mx-auto" src=".img/image1.png" alt="image description"></div>

        <!-- Div do parágrafo -->
        <div class="content-center">

            <!-- Parágrafo -->
            <p class="mt-3 sm:px-16 text-justify text-lg break-words font-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed imperdiet enim.
                Maecenas ac dolor in tortor blandit posuere. Donec ut leo fringilla nunc pulvinar luctus a ultricies neque. Sed eget dui urna.
                Proin gravida, elit non gravida aliquam, ante diam elementum eros, non bibendum orci lacus quis erat. Nam scelerisque mi nunc,
                at tempus erat imperdiet sit amet. Nulla vitae feugiat metus. Sed et diam eu libero pellentesque faucibus. Suspendisse malesuada velit lectus,
                eu pellentesque ex euismod id. Nulla non nisl et urna aliquet rhoncus eu in dui. Sed et pulvinar nibh. In id nisi sed nisi scelerisque bibendum
                vel ac nisi. Fusce in accumsan nisl. Maecenas tristique ante eget sem luctus bibendum. Pellentesque posuere bibendum neque,
                non tincidunt nulla scelerisque non.
            </p>
        </div>

        <!-- Div do segundo parágrafo -->
        <div class="content-center">

            <!-- Segundo parágrafo -->
            <p class="mt-4 text-justify sm:px-16 text-lg break-words font-sans">Sed finibus tortor in sem lobortis, nec congue ex scelerisque. Donec rhoncus quam
                sit amet tincidunt blandit. Sed mattis odio gravida mauris rhoncus, eget euismod quam lobortis. In dignissim aliquet quam id dictum. Suspendisse
                at nisl ipsum. Vestibulum pellentesque nisl quis justo lacinia laoreet. Nunc gravida tincidunt velit. Morbi commodo orci vitae massa tincidunt,
                sit amet tincidunt ligula consectetur. Donec vehicula massa id justo cursus tincidunt. Quisque pharetra feugiat arcu. Etiam a molestie ligula,
                vestibulum sagittis lorem.
        </div>

        <!-- Fim da seção -->
        @endsection

<!-- Fim do corpo -->
</body>

<!-- Final do arquivo -->
</html>