<?php
    $processadores = [
        [
            'modelo' => 'Intel I5 11400H',
            'preco' => 1024,60,
            'quantidade' => 5,
        ],
        [
            'modelo' => 'Intel I7 14700H',
            'preco' => 2000,
            'quantidade' => 3,
        ],
        [
            'modelo' => 'Pentium Dual Core',
            'preco' => 210,40,
            'quantidade' => 20,
        ],
        [
            'modelo' => 'Ryzen AMD 8',
            'preco' => 1502,
            'quantidade' => 7,
        ]
    ];

    $totalEstoque = 0;
    $valorTotal = 0;
    $processadorMaisCaro = 0;
    $processadorMaisBarato = $processadores[0];

    foreach($processadores as $processador) {

        $totalEstoque += $processador['quantidade'];
        $valorTotal += $totalEstoque;

        if ($processador['preco'] > $processadorMaisCaro){
            $processadorMaisCaro = $processador['preco'];
        }

        if ($processador['preco'] < $processadorMaisBarato) {
            $processadorMaisBarato = $processador['preco'];
        }
    }

    echo "Total do Estoque: {$totalEstoque}\n";
    echo "Valor Total: {$valorTotal}\n";
    echo "Processador Mais Caro: {$processadorMaisCaro}\n";
    echo "Processador Mais Barato: {$processadorMaisBarato}\n";


?>