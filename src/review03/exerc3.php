<?php
    $itens = [
        [
            'nome' => 'Sabonete',
            'preco' => 8.5,
            'quantidade' => 20,
        ],
        [
            'nome' => 'Sabão em Pó',
            'preco' => 22.5,
            'quantidade' => 10,
        ],
        [
            'nome' => 'Caixa de Bombom',
            'preco' => 12,
            'quantidade' => 30,
        ]
    ];

    $totalItem = 0;
    $totalCompra = 0;
    $itemMaisCaro = 0;
    $itemMaisBarato = $itens[0];

    foreach($itens as $item) {
        $totalItem = $item['preco'] * $item['quantidade'];
        $totalCompra += $totalItem;

        if($item['preco'] > $itemMaisCaro) {
            $itemMaisCaro = $item['preco'];
        }

        if($item['preco'] < $itemMaisBarato) {
            $itemMaisBarato = $item['preco'];
        }


    }

    echo "Totel de Itens: {$totalItem} \n";
    echo "Totel da Compra: {$totalCompra} \n";
    echo "Item mais caro: {$itemMaisCaro}\n";
    echo "Item mais barato: {$itemMaisBarato}";
?>