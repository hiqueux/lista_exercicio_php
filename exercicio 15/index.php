<?php

include "funcoes.php";

$peso = 70;
$altura = 1.85;
echo "1. IMC: " . calcularIMC($peso, $altura) . "<br>";


$email = "henrique_tonioti@estudante.sesisenai.org.br";
echo "2. E-mail: " . validarEmail($email) . "<br>";


echo "3. Senha gerada: " . gerarSenha() . "<br>";


$texto = "Amanha terá aulaaa";
echo "4. Quantidade de vogais: " . contarVogais($texto) . "<br>";


echo "5. Texto invertido: " . inverterTexto($texto) . "<br>";


$anoNascimento = 2009;
echo "6. Idade: " . calcularIdade($anoNascimento) . " anos<br>";


$valorReais = 100;
$cotacaoDolar = 5;
echo "7. Conversão: R$ " . $valorReais .
     " = US$ " . converterMoeda($valorReais, 1 / $cotacaoDolar) . "<br>";


$telefone = "47999605606";
echo "8. Telefone: " . formatarTelefone($telefone) . "<br>";


$hora = 20;
echo "9. Saudação: " . gerarSaudacao($hora) . "<br>";


$senha = "Senha123";
echo "10. Senha: " . validarSenhaForte($senha);

?>