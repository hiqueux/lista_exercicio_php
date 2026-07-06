<?php

// (x² + y²) / (x + y)

function calculateFormula($x, $y)
{
    if (($x + $y == 0) {
        return "Não é possivel realizar a divisão por zero.";
    }

    $resultado = (pow($x, 2) + pow($y, 2)) / ($x + $y);

    return $resultado;
}

$x = 10;
$y = 5;

echo "Valor de x: " . $x . "<br>";
echo "Valor de y: " . $y . "<br>";
echo "Resultado da fórmula: " . calculateFormula($x, $y);
