<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
</head>
<body>
    <h1>Seção 3: Estruturas de Repetição (for, while, do..while)</h1>

    <h2>Entrada de dados repetitiva:</h2>
    <p>Simular uma entrada de dados onde o programa continua "pedindo" informações até que um valor específico (0) seja "digitado" pelo usuário</p>

    <header>
        
        <?php
            $entradas = [7, 3, 9, 2];
            $i = 0;

            do {
                $valor = $entradas[$i];
                echo "Valor Informado: $valor<br>";
                $i++;
            } while ($valor != 0 && $i < count($entradas));
            
        ?>

    </header>
</body>
</html>