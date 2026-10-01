<?php

function estatisticasNumericas($numeros) {

    $soma = 0;
    $pares = 0;
    $impares = 0;

    foreach ($numeros as $numero) {

        $soma = $soma + $numero;

        if ($numero % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }

    $media = $soma / count($numeros);

    sort($numeros);

    $menor = $numeros[0];
    $maior = $numeros[count($numeros) - 1];

    $quantidade = count($numeros);

    if ($quantidade % 2 == 0) {
        $meio1 = $numeros[($quantidade / 2) - 1];
        $meio2 = $numeros[$quantidade / 2];

        $mediana = ($meio1 + $meio2) / 2;
    } else {
        $mediana = $numeros[floor($quantidade / 2)];
    }

    return [
        "Soma" => $soma,
        "Média" => $media,
        "Maior" => $maior,
        "Menor" => $menor,
        "Mediana" => $mediana,
        "Pares" => $pares,
        "Ímpares" => $impares
    ];
}

//valor de exemplo
$numeros = [6, 7, 13, 22, 26];
$resultado = estatisticasNumericas($numeros);

echo "Soma: " . $resultado["Soma"] . "<br>";
echo "Média: " . $resultado["Média"] . "<br>";
echo "Maior valor: " . $resultado["Maior"] . "<br>";
echo "Menor valor: " . $resultado["Menor"] . "<br>";
echo "Mediana: " . $resultado["Mediana"] . "<br>";
echo "Quantidade de pares: " . $resultado["Pares"] . "<br>";
echo "Quantidade de ímpares: " . $resultado["Ímpares"] . "<br>";

?>