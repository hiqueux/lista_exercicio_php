<?php

function calcularIMC($peso, $altura) {
    return $peso / ($altura * $altura);
}

function validarEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) ? "E-mail válido" : "E-mail inválido";
}

function gerarSenha() {
    $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $senha = "";

    for ($i = 0; $i < 8; $i++) {
        $senha = $senha . $caracteres[rand(0, strlen($caracteres) - 1)];
    }

    return $senha;
}

function contarVogais($texto) {
    $contador = 0;
    $vogais = "aeiouAEIOU";

    for ($i = 0; $i < strlen($texto); $i++) {

        if (strpos($vogais, $texto[$i]) !== false) {
            $contador++;
        }
    }
    return $contador;
}

function inverterTexto($texto) {
    return strrev($texto);
}

function calcularIdade($anoNascimento) {

    $anoAtual = date("Y");

    return $anoAtual - $anoNascimento;
}

function converterMoeda($valor, $cotacao) {
    return $valor * $cotacao;
}

function formatarTelefone($telefone) {
    $telefone = preg_replace("/[^0-9]/", "", $telefone);

    if (strlen($telefone) == 11) {
        return "(" . substr($telefone, 0, 2) . ") " .
               substr($telefone, 2, 5) . "-" .
               substr($telefone, 7, 4);
    }
    return $telefone;
}

function gerarSaudacao($hora) {

    if ($hora >= 6 && $hora < 12) {
        return "Bom dia!";
    } elseif ($hora >= 12 && $hora < 18) {
        return "Boa tarde!";
    } else {
        return "Boa noite!";
    }
}

function validarSenhaForte($senha) {

    if (strlen($senha) < 8) {
        return "Senha fraca";
    }

    $temNumero = false;
    $temMaiuscula = false;

    for ($i = 0; $i < strlen($senha); $i++) {

        if (is_numeric($senha[$i])) {
            $temNumero = true;
        }

        if ($senha[$i] >= 'A' && $senha[$i] <= 'Z') {
            $temMaiuscula = true;
        }
    }

    if ($temNumero && $temMaiuscula) {
        return "Senha forte";
    }
    return "Senha fraca";
}

?>