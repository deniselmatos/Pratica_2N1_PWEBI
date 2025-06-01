<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
</head>
<body>
    <h1>Seção 3: Estruturas de Repetição (for, while, do..while)</h1>

    <h2>22. Itens pares em lista:</h2>
    <p>Mostrar apenas os números pares de uma sequência de 2 a 20, como se fossem identificadores de produtos.
    </p>

    <header>
        
        <?php
            echo "ID dos produtos pares:";

            for ($i = 2; $i <= 20; $i += 2) {
                echo "Item $i<br>";
            }
        ?>

    </header>
</body>
</html>