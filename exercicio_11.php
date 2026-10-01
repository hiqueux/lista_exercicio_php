<?php

function formatarTexto($texto) {

    $maiusculo = strtoupper($texto);

    $minusculo = strtolower($texto);

    $primeiraMaiuscula = ucwords(strtolower($texto));

    $quantidade = strlen($texto);

    return [
        "Maiúsculo" => $maiusculo,
        "Minúsculo" => $minusculo,
        "Primeira letra maiúscula" => $primeiraMaiuscula,
        "Quantidade de caracteres" => $quantidade
    ];
}

//valor de exemplo
$texto = "essa sa esta me cansando e não tenho tempo pra fazer";
$resultado = formatarTexto($texto);

echo "Maiúsculo: " . $resultado["Maiúsculo"] . "<br>";
echo "Minúsculo: " . $resultado["Minúsculo"] . "<br>";
echo "Primeira letra maiúscula: " . $resultado["Primeira letra maiúscula"] . "<br>";
echo "Quantidade de caracteres: " . $resultado["Quantidade de caracteres"];

?>