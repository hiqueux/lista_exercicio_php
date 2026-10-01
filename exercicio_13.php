<?php

function criptografarMensagem($texto) {

    $resultado = "";

    for ($i = 0; $i < strlen($texto); $i++) {
        $letra = $texto[$i];

        if ($letra >= 'a' && $letra <= 'z') {
            $resultado = $resultado . chr((ord($letra) - 97 + 3) % 26 + 97);
        } 
        elseif ($letra >= 'A' && $letra <= 'Z') {
            $resultado = $resultado . chr((ord($letra) - 65 + 3) % 26 + 65);
        } 
        else {
            $resultado = $resultado . $letra;
        }
    }
    return $resultado;
}

function descriptografarMensagem($texto) {
    $resultado = "";

    for ($i = 0; $i < strlen($texto); $i++) {

        $letra = $texto[$i];

        if ($letra >= 'a' && $letra <= 'z') {
            $resultado = $resultado . chr((ord($letra) - 97 - 3 + 26) % 26 + 97);
        } 
        elseif ($letra >= 'A' && $letra <= 'Z') {
            $resultado = $resultado . chr((ord($letra) - 65 - 3 + 26) % 26 + 65);
        } 
        else {
            $resultado = $resultado . $letra;
        }
    }
    return $resultado;
}

//valor de xemplo
$mensagem = "Ola Mundo";
$mensagemCriptografada = criptografarMensagem($mensagem);
$mensagemOriginal = descriptografarMensagem($mensagemCriptografada);

echo "Mensagem original: " . $mensagem . "<br>";
echo "Mensagem criptografada: " . $mensagemCriptografada . "<br>";
echo "Mensagem descriptografada: " . $mensagemOriginal;

?>