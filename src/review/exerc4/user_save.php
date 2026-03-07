<?php

    if($_SERVER['REQUEST_METHOD'] = 'POST'){


    $nome = $_POST['nome'];     // erro do ponto e vírgula corrigido
    $email = $_POST['email'];
    $idade = $_POST['idade'];

    $arquivo = "usuarios.json";

    if(file_exists($arquivo)){
        $dados = file_get_contents($arquivo);   // erro do ponto e vírgula corrigido
        $usuarios = json_decode($dados);
    }

    $novoUsuario = [
        "nome" => $nome,
        "email" => $mail,
        "idade" => $idade   // faltou adicionar o "$" à variável idade
    ];

    $usuarios[] = $novoUsuario;     // erro do ponto e vírgula corrigido

    $json = json_encode($usuarios);     // erro do ponto e vírgula corrigido

    file_put_contents($arquivo, $json);     // faltou adicionar a virgula entre os parâmetros/variáveis

    echo "Usuario salvo com sucesso";   // erro do ponto e vírgula corrigido

    }
?>