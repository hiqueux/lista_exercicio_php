<?php

function analisarProdutos($produtos, $pesquisa) {

    $maisCaro = $produtos[0];
    $maisBarato = $produtos[0];
    $soma = 0;
    $encontrado = "Produto não encontrado";

    foreach ($produtos as $produto) {

        $soma = $soma + $produto["preco"];

        if ($produto["preco"] > $maisCaro["preco"]) {
            $maisCaro = $produto;
        }

        if ($produto["preco"] < $maisBarato["preco"]) {
            $maisBarato = $produto;
        }

        if (strtolower($produto["nome"]) == strtolower($pesquisa)) {
            $encontrado = $produto;
        }
    }

    // Calcula a média
    $media = $soma / count($produtos);

    return [
        "Mais caro" => $maisCaro,
        "Mais barato" => $maisBarato,
        "Média" => $media,
        "Pesquisa" => $encontrado
    ];
}

$produtos = [
    ["nome" => "Arroz", "preco" => 25],
    ["nome" => "Feijão", "preco" => 10],
    ["nome" => "Leite", "preco" => 6],
    ["nome" => "Café", "preco" => 18]
];

$pesquisa = "Café";

$resultado = analisarProdutos($produtos, $pesquisa);

// Mostra os resultados
echo "Produto mais caro: " . $resultado["Mais caro"]["nome"] . 
     " - R$ " . $resultado["Mais caro"]["preco"] . "<br>";

echo "Produto mais barato: " . $resultado["Mais barato"]["nome"] . 
     " - R$ " . $resultado["Mais barato"]["preco"] . "<br>";

echo "Média dos preços: R$ " . $resultado["Média"] . "<br>";

echo "Produto pesquisado: ";

if (is_array($resultado["Pesquisa"])) {
    echo $resultado["Pesquisa"]["nome"] . 
         " - R$ " . $resultado["Pesquisa"]["preco"];
} else {
    echo $resultado["Pesquisa"];
}

?>