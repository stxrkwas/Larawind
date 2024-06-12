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
    <title>Quem somos </title>

<!-- Fim do cabeçalho -->
</head>

<!-- Corpo do HTML -->
<body>

    <!-- Estilização da página -->
    <style>

        /* Imagem */
        #image {

            /* Margem superior */
            padding-top: 20px;

            /* Margem inferior */
            padding-bottom: 30px;
        }

        /* Div 1 */
        #div1 {

            /* Margem superior */
            padding-top: 80px;
        }

        /* Parágrafo 1 */
        #p1{

            /* Margem superior */
            padding-top: 20px;
        }
    </style>

    <!-- Extende o arquivo 'layout' da pasta 'layout' -->
    @extends('layout.layout')

    <!-- Seção, conteúdo que fica dentro da extensão de 'content' de 'layout.layout' -->
    @section('content')

    <!-- Div container: -->
    <div class="content-center py-9" id="div1">


        <!-- Título -->
        <h1 class="mb-4 my-6 text-5xl text-center font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
            Maria Luiza Passo Silva</h1>

        <!-- Parágrafo:  -->
        <p class="mb-4 text-lg font-normal text-center text-gray-500 lg:text-xl sm:px-24 xl:px-48 dark:text-gray-400">
            3º NOVOTEC Desenvolvimento de Sistemas. Turma da manhã. Grupo B.</p>

        <!-- Div da imagem -->
        <div class="mt-5" id="image">

            <!-- Imagem -->
            <img class="rounded-full w-64 h-64 mx-auto" src="/.img/image.png" alt="image description">
        
        </div>

        <!-- Div do botão:  -->
        <div class="text-center mb-4">

            <!-- Botão -->
            <a href="https://github.com/stxrkwas" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-yellow-300 rounded-lg 
                hover:bg-yellow-400 focus:ring-4 focus:ring-yellow-200 dark:focus:ring-yellow-500">Saiba mais
                
                <!-- Elemento raiz da imagem vetorial escalável (SVG) -->
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    
                    <!-- Este elemento define a forma real do botão usando comandos de caminho.  -->
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                
                </svg>
            </a>
        </div>

        <!-- Div do parágrafo -->
        <div class="content-center">

            <!-- Parágrafo -->
            <p class="sm:px-16 text-justify text-lg break-words font-normal" id="p1">
            Ut lectus dolor, venenatis a augue et, vestibulum dictum tortor. In vitae odio imperdiet, condimentum sem a, pretium quam. 
            Morbi erat elit, hendrerit quis maximus quis, gravida quis elit. Pellentesque habitant morbi tristique senectus et netus et 
            malesuada fames ac turpis egestas. Vivamus at finibus odio. Morbi posuere massa sed arcu consequat ultrices. Donec sapien felis, 
            dignissim in cursus non, ultricies ut neque. Maecenas quis blandit nunc. In at dolor varius, fermentum enim in, dapibus tellus. 
            Fusce auctor eleifend erat. Donec dignissim eros nec erat molestie, a condimentum enim porttitor. Phasellus sapien justo, 
            pulvinar eget hendrerit a, sodales sit amet mauris. Mauris fermentum tristique massa, et fermentum lectus. 
            Vestibulum sollicitudin ullamcorper consectetur.</p>

        </div>

        <!-- Fim da seção -->
        @endsection

<!-- Fim do corpo da página -->
</body>

<!-- Fim do arquivo -->
</html>