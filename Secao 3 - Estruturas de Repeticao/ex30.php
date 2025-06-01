<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
    <style>
        table { border-collapse: collapse;}
        td, th { border: 1px solid black; padding: 5px; text-align: center; }
    </style>
</head>
<body>
    <h1>Seção 3: Estruturas de Repetição (for, while, do..while)</h1>

    <h2>Tabelas de referência:</h2>
    <p> Gerar e exibir as tabuadas de 1 a 5 para uma consulta rápida</p>

    <header>
        
        <?php
            for ($n = 1; $n <= 5; $n++) {
                echo "<h3>Tabuada do $n:</h3><table>";
                
                for ($i = 1; $i <= 10; $i++) {
                    echo "<tr><td>$n x $i</td><td>" . ($n * $i) ."</td></tr>";
                }
                
                echo "</table><br>";
            }
        ?>

    </header>
</body>
</html>