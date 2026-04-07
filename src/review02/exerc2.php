<?php

    $salarios = [2340, 900, 1000, 1100, 1200, 2000, 3400, 1500];
    $maiorSalario = 0;
    $menorSalario = $salarios[0];
    $mediaSalarial = 0;
    $salarioAcima2000 = 0;
    $salarioAbaixo2000 = 0;

    foreach($salarios as $salario) {
        $mediaSalarial += $salario;

        if ($maiorSalario < $salario) {
            $maiorSalario = $salario;
        }

        if ($menorSalario > $salario) {
            $menorSalario = $salario;
        }

        if ($salario > 2000) {
            $salarioAcima2000++;
        } else {
            $salarioAbaixo2000++;
        }
    }

    print_r("Maior Salário: ". $maiorSalario . "\n");
    print_r("Menor Salário: ". $menorSalario . "\n");
    print_r("Média: " . $mediaSalarial / 8 . "\n");
    print_r("Acima de 2000: " . $salarioAcima2000 . "\n");
    print_r("Menor de 2000: " . $salarioAbaixo2000 . "\n");
?>