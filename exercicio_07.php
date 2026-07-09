<?php

function calcularDesconto($valorTotal) {

    if ($valorTotal > 1000) {
        $porcentagem = 0.30;
    } elseif ($valorTotal > 500) {
        $porcentagem = 0.20; 
    } elseif ($valorTotal > 100) {
        $porcentagem = 0.10; 
    } else {
        $porcentagem = 0.00;
    }


    $valorDesconto = $valorTotal * $porcentagem;
    $valorFinal = $valorTotal - $valorDesconto;


    return [
        'original' => $valorTotal,
        'desconto' => $valorDesconto,
        'final'    => $valorFinal
    ];
}

//Valor de exemplo
$compra = calcularDesconto(800.00);

echo "Valor Original: R$ " . number_format($compra['original'], 2, ',') . "<br>";
echo "Desconto ganho: R$ " . number_format($compra['desconto'], 2, ',') . "<br>";
echo "Valor Final:    R$ " . number_format($compra['final'], 2, ',') . "<br>";
