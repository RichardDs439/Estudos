<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio</title>
</head>
<body>
 
<?php

const COTACAO_DOLAR ="R$ 5.45";

$dolar1 = 10;
$dolar2 = 50;
$dolar3 = 100;

$real1 = $dolar1 * COTACAO_DOLAR;
$real2 = $dolar2 * COTACAO_DOLAR;
$real3 = $dolar3 * COTACAO_DOLAR;

// Exibindo tabela
echo "=== Conversão de Dólar para Real ===\n";
echo "Cotação do Dólar: R$ " . number_format(COTACAO_DOLAR, 2, ',', '.') . "\n\n";

echo str_pad("Dólar (US$)", 15) . str_pad("Real (R$)", 15) . "\n";
echo str_repeat("-", 30) . "\n";
echo str_pad("$" . $dolar1, 15) . "R$ " . number_format($real1, 2, ',', '.') . "\n";
echo str_pad("$" . $dolar2, 15) . "R$ " . number_format($real2, 2, ',', '.') . "\n";
echo str_pad("$" . $dolar3, 15) . "R$ " . number_format($real3, 2, ',', '.') . "\n";
?>


</body>
</html>




