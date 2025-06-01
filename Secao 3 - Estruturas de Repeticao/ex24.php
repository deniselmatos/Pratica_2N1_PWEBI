<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
</head>
<body>
    <h1>Seção 3: Estruturas de Repetição (for, while, do..while)</h1>

    <h2>Processamento Limitado:</h2>
    <p>Processar uma lista de 100 itens, mas interromper o processamento assim que 50 itens forem processados para evitar sobrecarga.</p>

    <header>
        
        <?php
            for ($i =1; $i <= 100; $i++) {
                echo "Item $i processado<br>";
                if ($i == 50){
                    echo "<br>Limite de processamento atingido";
                    break;
                } 
            }
            
        ?>

    </header>
</body>
</html>