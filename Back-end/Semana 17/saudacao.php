<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
</head>
<body>
    <h1>Olá meus amigos</h1>
    <p>
    <?php 
        if (isset($_POST['campo_nome'])) 
                $nomeRecebido = $_POST['campo_nome'];
    
        echo "Olá, " . htmlspecialchars($nomeRecebido) . "! Seja muito bem-vindo(a) ao mundo do Back-End!";
             
         echo "Nenhum nome foi enviado. Volte e preencha o formulário.";
            




    ?>


    </p>
    
</body>
</html>