<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrega</title>
</head>
<body>

<?php 
    
    const NOME_EMPRESA = "Toramento Sites";

    $nomeProduto = "Toramento 4060";

    $quantidadeEstoque = "19";

    $precoUnitario = "3200";

    $emPromocao = "false";

  
 echo "=== Relatório de Produto ===\n";
echo "Empresa: " . NOME_EMPRESA . "\n";
echo "Nome do Produto: " . $nomeProduto . "\n";
echo "Quantidade em Estoque: " . $quantidadeEstoque . "\n";
echo "Preço Unitário: R$ " . number_format($precoUnitario, 2, ',', '.') . "\n";
echo "Em Promoção: " . ($emPromocao ? "Sim" : "Não") . "\n";

echo "\n--- Inspeção da variável ---\n";
var_dump($emPromocao);
?>










?>



    
</body>
</html>