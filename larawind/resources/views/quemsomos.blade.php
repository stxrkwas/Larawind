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

    <!-- Estilização dos elementos da página -->
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

            padding-bottom: 20px;
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
            Maria Luiza</h1>

        <!-- Parágrafo:  -->
        <p class="mb-4 text-lg font-normal text-center text-gray-500 lg:text-xl sm:px-24 xl:px-48 dark:text-gray-400">
            Estudante da ETEC Zona Leste.</p>

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
            <p class="sm:px-16 lg:px-24 text-justify text-lg break-words font-normal" id="p1">
                Olá, eu sou a Maria Luiza, estudante da ETEC Zona Leste atualmente cursando o terceiro ano do Ensino Médio integrado 
                ao Ensino Técnico, o NOVOTEC. Estudo na turma da manhã e faço parte da Turma B.
                Esta é uma atividade da matéria técnica Programação Web III, a qual objetiva a criação de um projeto no framework Laravel, 
                utilizando Boostrap ou Tailwind CSS e imagens para a estilização das páginas. Entre os requisitos necessários para a entrega dessa atividade estão
                a criação de três páginas para visualização, as 'views' principal, quem somos e contato, todas elas possuem conteúdo livre.
                A 'view' contato deve conter um formulário com as variáveis 'nome', 'telefone', 'endereço' e 'sexo'. O formulário deve ter o 'action' enviando para o 
                'controller' as informações e exibi-las na página usando 'var_dump'.
                A atividade será entregue no Microsoft Teams, enquanto o projeto está disponível em seu repositório no site GitHub. Clique em saiba mais e descubra 
                mais projetos web e de outros tipos no meu perfil.</p>

        </div>

        <!-- Fim da seção -->
        @endsection

<!-- Fim do corpo da página -->
</body>

<!-- Fim do arquivo -->
</html>