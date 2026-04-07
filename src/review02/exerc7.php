<?php

    $celulares = [
        [
            'modelo' => "A",
            'preco' => 60,
            'quantidade' => 10
        ],
        [
            'modelo' => "B",
            'preco' => 50,
            'quantidade' => 9
        ],
        [
            'modelo' => "C",
            'preco' => 40,
            'quantidade' => 8
        ],
        [
            'modelo' => "D",
            'preco' => 30,
            'quantidade' => 7
        ],
        [
            'modelo' => "E",
            'preco' => 20,
            'quantidade' => 6
        ]
    ];

    $total = 0;
    foreach ($celulares as $celular) {
        $total += $celular['quantidade'] * $celular['preco'];
        echo $celular['modelo'] . "\n";
    }

    print_r($total);
?>