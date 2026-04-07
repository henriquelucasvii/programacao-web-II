<?php
    $idades = [23, 12, 40, 54, 10, 18, 21, 19, 5, 3, 65, 43];

    $mediaidade = 0;
    $maiorIdade = 0;
    $menorIdade = $idades[0];
    $maioresDeIdade = 0;
    $menoresDeIdade = 0;

    foreach($idades as $idade) {
        $media += $idade;

        if ($idade > $maiorIdade) {
            $maiorIdade = $idade;
        }
        if ($idade < $menorIdade) {
            $menorIdade = $idade;
        }


        if ($idade >= 18) {
            $maioresDeIdade++;
        } else {
            $menoresDeIdade++;
        }
    }

    // count retorna o nº de índices/elementos do vetor (12)
    $media /= count($idades);
    
    print_r("Maior idade: " . $maiorIdade . "\nMenor idade: " . $menorIdade . "\n");
    print_r("Nº de pessoas maiores de 18: " . $maioresDeIdade . "\nNº de pessoas menores de 18: " . $menoresDeIdade . "\n");
    print_r("Média das idades: " . $media);

?>