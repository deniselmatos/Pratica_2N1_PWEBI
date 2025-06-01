<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
</head>
<body>
    <h1>Seção 1: Variáveis e Tipos de Dados</h1>

    <h2>04. Status de pedido:</h2>

    <ul>
        <li>Crie uma variavel booleana para o status de um pedido.</li>
        <li>Exiba o status em forma compreensível usando condicional.</li>
    </ul>

    <header>
        <?php
            $aceito = true;

            if ($aceito) { 
                echo "Pedido aceito";
            } else {
                echo "Pedido negado";
            }
            
        ?>
    </header>
</body>
</html>