<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Orçamento "PC-Pronto"</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

  <form method="POST">
            <label for="preço do produto">Preço do Produto:</label>
            <input type="text" id="preço" name="produto" required>

            <label for="Quantidade">Quantidade:</label>
            <input type="number" id="valor" name="valor" step="0.01" required>

            <button type="submit">Subtotal</button>

<?php 

$preco = $_POST['preço do produto'];
$quantidade = $_POST['Quantodade'];   

$subtotal= $preco * $quantidade

echo "preco"

?>





    

    




    
</body>
</html>