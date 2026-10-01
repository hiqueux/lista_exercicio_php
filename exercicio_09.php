<?php

function analisarNumero($numero) {

    //verifica se é par ou ímpar
    if ($numero % 2 == 0) {
        $paridade = "Par";
    } else {
        $paridade = "Ímpar";
    }

    //verifica se é primo
    $primo = true;

    if ($numero < 2) {
        $primo = false;
    } else {
        for ($i = 2; $i < $numero; $i++) {
            if ($numero % $i == 0) {
                $primo = false;
                break;
            }
        }
    }

    //verifica se é perfeito
    $soma = 0;

    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $soma = $soma + $i;
        }
    }

    if ($soma == $numero) {
        $perfeito = "Sim";
    } else {
        $perfeito = "Não";
    }

    return [
        "Paridade" => $paridade,
        "Primo" => $primo ? "Sim" : "Não",
        "Perfeito" => $perfeito
    ];
}

//Valor de exemplo
$numero = 67;

$resultado = analisarNumero($numero);

echo "Número: " . $numero . "<br>";
echo "Par ou ímpar: " . $resultado["Paridade"] . "<br>";
echo "Primo: " . $resultado["Primo"] . "<br>";
echo "Perfeito: " . $resultado["Perfeito"];

?>