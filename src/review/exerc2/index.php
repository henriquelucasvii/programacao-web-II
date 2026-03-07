<?php
    /* Atividade 2 -  Descreva a diferença entre json_encode() e json_decode() no PHP, 
    apresentando um exemplo simples de uso (crei um código que execute isso). */    
    $arquivo = "data.json";

    $texto = file_get_contents($arquivo);
    $data = json_decode($texto, true);
    $data = $data ? : [];
    
    $newData = [
        $id = "James",
        $age = 24,
        $email = "james@gmail.com",
    ];

    $data[] = $newData;
    $newJson = json_encode($data);

    file_put_contents($arquivo, $newJson);
?>