<?php
    
    $id = $_GET['id'];  // erro do ponto e vírgula corrigido

    $arquivo = "usuarios.json";

    $dados = file_get_contents($arquivo);

    $usuarios = json_decode($dados, true);

    foreach ($usuarios as $i => $usuario) {

        if ($usuario['id'] == $id) {

            unset($usuarios[$i]);   // erro do ponto e vírgula corrigido

        }

    }

    $usuarios = array_values($usuarios);

    $json = json_encode($usuarios);

    file_put_contents($arquivo, $json);     // faltava passar o segundo parâmetro

    echo "Usuario deletado";    // erro do ponto e vírgula corrigido
?>