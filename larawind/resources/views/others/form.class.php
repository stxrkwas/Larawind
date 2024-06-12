<?php

// Inclua a sua classe de formulário ou qualquer lógica de processamento (opcional)
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // O formulário foi enviado via GET
    $email = $_GET['email'];
    $senha = $_GET['senha'];
    $repeat_password = $_GET['repeat_password'];
    $primeiro_nome = $_GET['primeiro_nome'];
    $sobrenome = $_GET['sobrenome'];
    $telefone = $_GET['telefone'];
    $sexo = $_GET['sexo'];
  
    // Validação e processamento dos dados do formulário (opcional)
  
    // Exibir os dados do formulário usando var_dump
    echo '<h4>Dados do formulário</h4>';
    var_dump($email);
    var_dump($senha);
    var_dump($repeat_password);
    var_dump($primeiro_nome);
    var_dump($sobrenome);
    var_dump($telefone);
    var_dump($sexo);
  }

?>