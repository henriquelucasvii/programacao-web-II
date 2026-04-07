<?php
    $temperaturas = [23,10,32,43,21,20,43,21,22.5,25.6];

    $maiorTemperatura = 0;
    $menorTemperatura = $temperaturas[0];
    $media = 0;
    $temperaturaMaior30 = 0;
    $temperaturaMenor30 = 0;

    foreach($temperaturas as $temperatura) {
        $media += $temperatura;

        if($maiorTemperatura < $temperatura) {
            $maiorTemperatura = $temperatura;
        } 
        
        if($menorTemperatura > $temperatura){
            $menorTemperatura = $temperatura;
        }

        if($temperatura > 30) {
            $temperaturaMaior30++;
        } else {
            $temperaturaMenor30++;
        }
    }

    $media /= 10;
    
    print_r("Média: " . $media . "\n");
    print_r("Maior Temperatura: " . $maiorTemperatura . "\n");
    print_r("Menor Temperatura: " . $menorTemperatura . "\n");
    print_r("Maior que 30: " . $temperaturaMaior30 . "\n");
    print_r("Menor que 30: " . $temperaturaMenor30 . "\n");


?>