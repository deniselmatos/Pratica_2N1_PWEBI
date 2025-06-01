<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
</head>
<body>
    <h1>Seção 3: Estruturas de Repetição (for, while, do..while)</h1>

    <h2>21. Contagem regressiva simples:</h2>
    <p>Exibir uma contagem de 1 a 10 para simular a ordem de uma lista. Por estar no lado do servidor, essa contagem não será interativa [ainda], mostre apenas os números em ordem crescente. Use a criatividade para parecer uma contagem regressiva.</p>

    <header>
        <?php
            echo "<h3>Contagem regressiva iniciada...</h3>";
            for ($i = 1; $i <= 10; $i++) {
                echo (11 - $i) . "<br>";
            }
            
       
        ?>

    </header>
</body>
</html>