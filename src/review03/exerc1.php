<?php

    $idades = [
        [
            'name' => "Lucas Henrique",
            'age' => 19
        ],
        [
            'name' => "Carlos Albuquerque",
            'age' => 42
        ],
        [
            'name' => "Alice Fonseca",
            'age' => 21
        ],
        [
            'name' => "Ruan Lana",
            'age' => 20
        ],
        [
            'name' => "Gabriel Xavier",
            'age' => 4
        ],
        [
            'name' => "Henry Souza",
            'age' => 76
        ],
        [
            'name' => "Fernando Brum",
            'age' => 34
        ],
        [
            'name' => "Angela Izabel",
            'age' => 44
        ],
        [
            'name' => "Pedro Antônio",
            'age' => 3
        ],
        [
            'name' => "Lucas Gabriel",
            'age' => 53
        ],
        [
            'name' => "Thiago Carlos",
            'age' => 40
        ],
        [
            'name' => "Ana Maria",
            'age' => 12
        ],
        
    ];

    $media = 0;
    $maiorIdade = 0;
    $menorIdade = $idades[0];
    $maioresDeDezoito = 0;
    $menoresDeDezoito = 0;
    $pessoaMaiorIdade = "";
    $pessoaMenorIdade = "";


    foreach($idades as $idade) {
        $media += $idade['age'];

        if ($idade['age'] > $maiorIdade ) {
            $maiorIdade = $idade['age'];
            $pessoaMaiorIdade = $idade['name'];
        } 
        
        if ($idade['age'] < $menorIdade){
            $menorIdade = $idade['age'];
            $pessoaMenorIdade = $idade['name'];
        }

        if ($idade['age'] >= 18) {
            $maioresDeDezoito++;
        } else {
            $menoresDeDezoito++;
        }
    }
    $media /= count($idades);

    echo "Idade e nome da pessoa mais velha: {$pessoaMaiorIdade}, {$maiorIdade}\n";
    echo "Idade e nome da pessoa mais nova: {$pessoaMenorIdade}, {$menorIdade}\n";
    echo "Maior de Dezoito: {$maioresDeDezoito}\t Menores de Dezoito: {$menoresDeDezoito}\n";
    echo "Média: {$media}";


?>