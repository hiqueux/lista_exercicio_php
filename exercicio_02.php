<?php

function inverterTexto($texto)
{
    return strrev($texto);
}

$texto = "Amo a julia";
$textoInvertido = inverterTexto($texto);
echo "Texto original: " . $texto . "<br>";
echo "Texto invertido: " . $textoInvertido . "<br>";
echo "Quantidade de caracteres: " . strlen($texto) . "<br>";

