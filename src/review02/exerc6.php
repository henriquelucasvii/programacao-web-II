<?php
    function calculaItens() {
        $itens = [
            [
                'nome' => 'Detergente',
                'preco' => 15,
                'quantidade' => 10
            ],
            [
                'nome' => 'Coca-Cola',
                'preco' => 12,
                'quantidade' => 30
            ],
            [
                'nome' => 'Ovo',
                'preco' => 12,
                'quantidade' => 30
            ],
            [
                'nome' => 'Peixe',
                'preco' => 20,
                'quantidade' => 10
            ],
        ];

        $totalItem = 0;
        $totalCompra = 0;

        foreach($itens as $item) {
            $totalItem += $item['preco'];
            $totalCompra += $item['preco'] * $item['quantidade'];
        }

        echo $totalItem . "\n";
        echo $totalCompra;

    }

    calculaItens();
?>