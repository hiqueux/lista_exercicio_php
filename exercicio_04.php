<?php

function gerarSenha($tamanho) {
    $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+-=[]{}|;:,.<>?';
 
    return substr(str_shuffle($caracteres), 0, $tamanho);
}

echo "Sua senha temporária é: <strong>" . htmlspecialchars(gerarSenha(12)) . "</strong>";