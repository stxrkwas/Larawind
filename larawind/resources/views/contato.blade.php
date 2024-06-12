<!-- Indicando o formato do arquivo -->
<!DOCTYPE html>

<!-- Definindo a linguagem da página -->
<html lang="pt-br">

<!-- Cabeçalho -->
<head>

    <!-- Tipo de caracteres -->
    <meta charset="UTF-8">

    <!-- Indica que largura da página proporcional ao tamanho da tela e define o zoom inicial. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Título da página, aparece na barra de navegação -->
    <title>Contato</title>

<!-- Fim do cabeçalho -->
</head>

<!-- Corpo do HTML -->
<body>

    <!-- Estilização da página -->
    <style>

        /* Formulário */
        #form1 {

            /* Margem superior */
            padding-top: 150px;

        }

    /* Fim da estilização */
    </style>

    <!-- Extende o arquivo 'layout' da pasta 'layout' -->
    @extends('layout.layout')

    <!-- Seção, conteúdo que fica dentro da extensão de 'content' de 'layout.layout' -->
    @section('content')

    <!-- Formulário -->
    <form class="max-w-md mx-auto" id="form1">

        <!-- Div do campo de email -->
        <div class="relative z-0 w-full mb-5 group">

            <!-- Campo do email -->
            <input type="email" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            
            <!-- Rotulo do campo 'email' -->
            <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Endereço de email</label>
        
        </div>

        <!-- Div do campo de senha-->
        <div class="relative z-0 w-full mb-5 group">
            
            <!-- Campo da senha -->
            <input type="password" name="floating_password" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            
            <!-- Rotulo do campo 'senha' -->
            <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Senha</label>
        
        </div>

        <!-- Div do campo -->
        <div class="relative z-0 w-full mb-5 group">
            <input type="password" name="repeat_password" id="floating_repeat_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            
            <!--  -->
            <label for="floating_repeat_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Confirme a senha</label>
        
        </div>

        <!-- Div dos campos de nome, do tipo grid  -->
        <div class="grid md:grid-cols-2 md:gap-6">

            <!-- Div do campo 'primeiro nome' -->
            <div class="relative z-0 w-full mb-5 group">

                <!-- Campo de texto -->
                <input type="text" name="floating_first_name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                
                <!-- Rotulo do campo 'Primeiro nome' -->
                <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Primeiro nome</label>
            
            </div>

            <!-- Div do campo 'sobrenome' -->
            <div class="relative z-0 w-full mb-5 group">

                <!-- Campo de texto -->
                <input type="text" name="floating_last_name" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                
                <!-- Rotulo do campo 'Sobrenome' -->
                <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Sobrenome</label>
            
            </div>
        
        </div>

        <!-- Div do campo -->
        <div class="relative z-0 w-full mb-5 group">

            <!-- Campo de texto do tipo telefone -->
            <input type="tel" pattern="+[0-9]{2} ([0-9]){2} [0-9]{5}-[0-9]{4}" name="floating_phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            
            <!-- Rotulo do campo 'Telefone/celular': -->
            <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Número de telefone/celular</label>
        
        </div>

        <!-- Div do campo 'sexo' -->
        <div class="relative z-0 w-full mb-5 group">

            <!-- Rotulo do campo de seleção 'Sexo' -->
            <label for="sexo" class="block mb-2 text-sm font-normal text-gray-500 dark:text-white">Sexo</label>
            
            <!-- Lista de opções -->
            <select id="sexo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                
                <!-- Opção 1 -->
                <option>Selecione uma opção</option>

                <!-- Opção 'feminino' -->
                <option>Feminino</option>

                <!-- Opção 'masculino' -->
                <option>Masculino</option>

            </select>

        </div>

        <!-- Botão -->
        <button type="submit" class="text-white bg-yellow-300 hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-yellow-200 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-yellow-300 dark:hover:bg-yellow-400 dark:focus:ring-yellow-500">Enviar</button>

        <!-- Fim do formulário -->
    </form>

    <!-- Fim da seção -->
    @endsection

    <!-- Final do corpo -->
</body>

<!-- Fim do HTML -->
</html>