<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
</head>
<body>
    <h1>Seção 1: Variáveis e Tipos de Dados</h1>

    <h2>5. Preço de venda e tipo de dado:</h2>

    <ul>
        <li>Defina o preço unitário de um item.</li>
        <li>Use var_dump() ou gettype() para exibir o tipo da variável.</li>
    </ul>

    <header>
        <?php
            $preco = 17.30;

           echo gettype($preco) . "<br> E o preço unitário é: $preco";

            
        ?>
    </header>
</body>
</html>