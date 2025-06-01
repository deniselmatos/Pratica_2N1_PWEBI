<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
</head>
<body>
    <h1>Seção 3: Estruturas de Repetição (for, while, do..while)</h1>

    <h2>23. Preparando para lançamento:</h2>
    <p>Exibir uma contagem regressiva de 5 a 1 antes de um "lançamento". Semelhante a anterior, mas juntanto texto e número e decrescente.
    </p>

    <header>
        
        <?php
            echo "<strong> Preparando para lançamento!<br><strong>";

            for ($i = 5; $i >= 1; $i--) {
                echo "<br>$i...";
            }
            
            echo "<strong><br><br>Lançamento concluido!</strong>";
        ?>

    </header>
</body>
</html>