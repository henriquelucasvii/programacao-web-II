<?php
    $pessoas = [
        [
            'nome' => 'Lucas Henrique',
            'profissao' => 'Desenvolvedor de Software',
            'salario' => 3800,
        ],
        [
            'nome' => 'Marcos Douglas',
            'profissao' => 'Pedreiro',
            'salario' => 1800,
        ],
        [
            'nome' => 'Catarina Vieira',
            'profissao' => 'Assistente Administrativa',
            'salario' => 2150,
        ],
        [
            'nome' => 'Pedro André',
            'profissao' => 'Cozinheiro',
            'salario' => 1720,
        ],
        [
            'nome' => 'Álvaro Santos',
            'profissao' => 'Engenheiro Mecânico',
            'salario' => 5000,
        ],
    ];

    $media = 0;
    $maiorSalario = 0;
    $menorSalario = $pessoas[0];
    $salarioAcima2000 = 0;
    $salarioMenor2000 = 0;
    $pessoaMaiorSalario = 0;
    $pessoaMenorSalario = 0;

    // Execucão com loop for tradicional
    for($i = 0; $i < count($pessoas); $i++) {
        if ($pessoas[$i]['salario'] > $maiorSalario ) {
            $maiorSalario = $pessoas[$i]['salario'];
            $pessoaMaiorSalario = $pessoas[$i]['nome'];
        }

        if ($pessoas[$i]['salario'] < $menorSalario) {
            $menorSalario = $pessoas[$i]['salario'];
            $pessoaMenorSalario = $pessoas[$i]['nome'];
        }

        if($pessoas[$i]['salario'] > 2000) {
            $salarioAcima2000++;
        } else {
            $salarioMenor2000++;
        }
    }

    
    echo $maiorSalario . "\n";
    echo $menorSalario . "\n";
    echo $salarioAcima2000 . "\n";
    echo $salarioMenor2000 . "\n";
    echo $pessoaMaiorSalario . "\n";
    echo $pessoaMenorSalario . "\n";



?>