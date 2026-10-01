<?php

function ordenarNomes($nomes) {

    $lista = explode(",", $nomes);

    foreach ($lista as $i => $nome) {
        $lista[$i] = trim($nome);
    }

    sort($lista);

    return $lista;
}


//Valor de exemplo
$nomes = " João, Maria, Pedro, Ana, Carlos ";

$resultado = ordenarNomes($nomes);

foreach ($resultado as $nome) {
    echo $nome . "<br>";
}

?>