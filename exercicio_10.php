<?php

function calcularMedia($notas) {

    $soma = 0;

    foreach ($notas as $nota) {
        $soma = $soma + $nota;
    }

    $media = $soma / count($notas);
    $maior = $notas[0];
    $menor = $notas[0];

    foreach ($notas as $nota) {

        if ($nota > $maior) {
            $maior = $nota;
        }

        if ($nota < $menor) {
            $menor = $nota;
        }
    }

    if ($media >= 7) {
        $situacao = "Aprovado";
    } elseif ($media >= 5) {
        $situacao = "Recuperação";
    } else {
        $situacao = "Reprovado";
    }

    return [
        "Maior nota" => $maior,
        "Menor nota" => $menor,
        "Média" => $media,
        "Situação" => $situacao
    ];
}

//valor de exemplo
$notas = [8, 7, 6, 9];
$resultado = calcularMedia($notas);

echo "Notas: " . implode(", ", $notas) . "<br>";
echo "Maior nota: " . $resultado["Maior nota"] . "<br>";
echo "Menor nota: " . $resultado["Menor nota"] . "<br>";
echo "Média: " . $resultado["Média"] . "<br>";
echo "Situação: " . $resultado["Situação"];

?>