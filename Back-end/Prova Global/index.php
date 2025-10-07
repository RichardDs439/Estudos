<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>PC-Pronto - Tempo de Entrega</title>
<link rel="stylesheet" href="style.css">

</head>
<body>

<h1>Sistema de Orçamento - PC-Pronto</h1>

<form method="post">
    <p>Preço do Produto (R$): <input type="number" name="preco" step="0.01" required></p>
    <p>Quantidade: <input type="number" name="quantidade" min="1" required></p>
    <p>CEP do Cliente: <input type="text" name="cep" required></p>
    <p><input type="submit" value="Calcular"></p>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $preco = (float) $_POST["preco"];
    $quantidade = (int) $_POST["quantidade"];
    $cep = preg_replace("/\D/", "", $_POST["cep"]);

    $subtotal = $preco * $quantidade;
    $imposto = $subtotal * 0.125;
    $total = $subtotal + $imposto;

    
    $frete = mt_rand(3000, 15000) / 100;
    $total_com_frete = $total + $frete;

    
    $url = "https://economia.awesomeapi.com.br/json/last/USD-BRL";
    $dados = @file_get_contents($url);
    if ($dados) {
        $json = json_decode($dados, true);
        $cotacao = (float) $json["USDBRL"]["bid"];
    } else {
        $cotacao = 5.00; 
    }

    $total_dolar = $total_com_frete / $cotacao;

    
    $dias_totais = $cep / 1000000;
    $meses = floor($dias_totais / 30);
    $resto = $dias_totais % 30;
    $semanas = floor($resto / 7);
    $dias = $resto % 7;

   
    echo "<hr>";
    echo "<p><b>Preço:</b> R$ " . number_format($preco, 2, ',', '.') . "</p>";
    echo "<p><b>Quantidade:</b> $quantidade</p>";
    echo "<p><b>Subtotal:</b> R$ " . number_format($subtotal, 2, ',', '.') . "</p>";
    echo "<p><b>Imposto (12,5%):</b> R$ " . number_format($imposto, 2, ',', '.') . "</p>";
    echo "<p><b>Frete:</b> R$ " . number_format($frete, 2, ',', '.') . "</p>";
    echo "<p><b>Total com Frete:</b> R$ " . number_format($total_com_frete, 2, ',', '.') . "</p>";
    echo "<p><b>Cotação do Dólar:</b> R$ " . number_format($cotacao, 2, ',', '.') . "</p>";
    echo "<p><b>Total em Dólares:</b> US$ " . number_format($total_dolar, 2, '.', ',') . "</p>";
    echo "<p><b>CEP:</b> $cep</p>";
    echo "<p><b>Tempo Estimado de Entrega:</b> $meses meses, $semanas semanas e " . round($dias) . " dias.</p>";
}
?>

</body>
</html>
