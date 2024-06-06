<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>

<body>
    @extends('layout.layout')
    <!-- Imagem: -->
    <!--img class="h-65 max-w-xxl" src=".img/image.png" alt="Imagem da ETEC Zona Leste"-->
    <!--img src=".img/image.png" class="img-fluid" alt="Foto tirada do campus da ETEC Zona Leste"-->


    <figure class="relative max-w-full transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0">
        <a href="#">
            <img class="" src=".img/image.png" alt="image description">
        </a>
        <!--figcaption class="absolute px-4 text-lg text-white bottom-6">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                Maecenas porttitor congue massa. <br>Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero,
                sit amet commodo magna eros quis urna.</p>
        </!--figcaption>-->
    </figure>

    <!-- Grid: -->
    <div class="container text-center">

        <!-- Linha: -->
        <div class="row">

            <!-- Coluna da esquerda: -->
            <div class="col">&nbsp;</div>

            <!-- Coluna central: -->
            <div class="col">

                <!-- Título -->
                <h1 class="mb-4 my-6 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                    Nunc viverra imperdiet enim.</h1>

                <!-- Parágrafo:  -->
                <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Maecenas porttitor congue massa. <br>Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero,
                    sit amet commodo magna eros quis urna.</p>

                <!-- Botão:  -->
                <a href="quemsomos" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg 
                hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">Saiba mais
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>

            <!-- Coluna direita: -->
            <div class="col">&nbsp;</div>

        </div>
    </div>

<!-- Editar a partir daqui:  -->
    <div class="container text-center">

        <!-- Linha do primeiro parágrafo: -->
        <div class="row">
            <div class="col">&nbsp;</div>
            <div class="col">
                <p class="mx-5 text-justify text-lg break-words font-sans">Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.
                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    Proin pharetra nonummy pede. Mauris et orci.
                </p>
            </div>
            <div class="col">&nbsp;</div>
        </div>

        <!-- Linha do segundo parágrafo: -->
        <div class="row">
            <div class="col">&nbsp;</div>
            <div class="col">
              <p class="mx-5 text-justify text-lg break-words font-sans">Aenean nec lorem. In porttitor. Donec laoreet nonummy augue.</p>
            </div>
            <div class="col">&nbsp;</div>
        </div>

        <!-- Linha do terceiro parágrafo: -->
        <div class="row">
            <div class="col">&nbsp;</div>
            <div class="col">
              <p class="text-justify mx-5 text-lg break-words font-sans">Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis,
                    nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy.</p>
            <div class="col">&nbsp;</div>
        </div>  
    </div>

    <!-- Comparar os dois grids. -->
        
    <!-- Grid no Tailwind: -->
    <div class="grid grid-cols-3">
        <div class="row">
            <div class="col span-1">&nbsp;</div>
            <div class="col span-12">
                <p class="text-justify text-lg break-words font-sans">Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.
                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    Proin pharetra nonummy pede. Mauris et orci.
                </p>
                <p class="text-justify text-lg break-words font-sans">Aenean nec lorem. In porttitor. Donec laoreet nonummy augue.</p>
                <p class="text-justify text-lg break-words font-sans">Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis,
                    nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy.</p>
            </div>
            <div class="col span-1">&nbsp;</div>
        </div>
    </div>

    
    <p class="mx-5 text-justify">Track work across the enterprise through an open, collaborative platform. Link issues across Jira and ingest data from other software development tools, so your IT support and operations teams have richer contextual information to rapidly respond to requests, incidents, and changes.</p>
    <p class="text-gray-500 dark:text-gray-400">Deliver great service experiences fast - without the complexity of traditional ITSM solutions.Accelerate critical development work, eliminate toil, and deploy changes with ease, with a complete audit trail for every change.</p>


</body>

</html>
