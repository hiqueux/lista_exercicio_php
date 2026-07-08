<?php

function analisarTexto($texto){

    $quantidadePalavras = str_word_count($texto);
    $quantiddeCaracteres = strlen($texto);

    $textoMinusculo = strtolower($texto);

    $quantidadeVogais = 0;
    $quantidadeConsoantes = 0;
    $vogais = ['a', 'e', 'i', 'o', 'u'];

    for ($i = 0; $i < strlen($textoMinusculo); $i++) {
        $caractere = $textoMinusculo[$i];

        if(ctype_alpha($caractere)){
            if(in_array($caractere, $vogais)){
                $quantidadeVogais++;
            } else {
                $quantidadeConsoantes++;
            }
        }
    }

    return [
        "palavras" => $quantidadePalavras,
        "caracteres" => $quantiddeCaracteres,
        "vogais" => $quantidadeVogais,
        "consoantes" => $quantidadeConsoantes
    ];
}

$texto_usuario = "O estudante Henrique esta fazendo a lista de PHP";

$resultado = analisarTexto($texto_usuario);

echo "Caracteres: " . $resultado["caracteres"] . "<br>";
echo "Palavras: " . $resultado["palavras"] . "<br>";
echo "Vogais: " . $resultado["vogais"] . "<br>";
echo "Consoantes: " . $resultado["consoantes"] . "<br>";