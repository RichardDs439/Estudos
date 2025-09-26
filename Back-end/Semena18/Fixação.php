<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixação 1</title>
</head>
<body>
 
<?php

$precoProduto = 150.00;
$percentualDesconto = 10;


$valorDesconto = ($precoProduto * $percentualDesconto) / 100;


$precoFinal = $precoProduto - $valorDesconto;


    echo "Cálculo de Desconto";
    echo "Preço original: R$ " . number_format($precoProduto);
    echo "Valor do desconto ({$percentualDesconto}%): R$ " . number_format($valorDesconto, 2,);
    echo "Preço final: R$ " . number_format($precoFinal, 2);
?>



























</body>
</html>