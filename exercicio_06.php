<?php

function converterTemperatura($valor, $origem, $destino) {
    $origem = strtoupper($origem);
    $destino = strtoupper($destino);

    if ($origem === $destino) {
        return $valor;
    }

    switch ($origem) {
        case 'C':
            $celsius = $valor;
            break;
        case 'F':
            $celsius = ($valor - 32) * 5 / 9;
            break;
        case 'K':
            $celsius = $valor - 273.15;
            break;
        default:
            return "Escala de origem inválida. Use C, F ou K.";
    }

    switch ($destino) {
        case 'C':
            return $celsius;
        case 'F':
            return ($celsius * 9 / 5) + 32;
        case 'K':
            return $celsius + 273.15;
        default:
            return "Escala de destino inválida. Use C, F ou K.";
    }
}

echo "100°F para Celsius: " . converterTemperatura(100, 'F', 'C') . "°C<br>";
echo "0°C para Kelvin: " . converterTemperatura(0, 'C', 'K') . "K<br>";
echo "300K para Fahrenheit: " . converterTemperatura(300, 'K', 'F') . "°F<br>";
