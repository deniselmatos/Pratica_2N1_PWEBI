<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
<body>
    <h1>Seção 4: Funções (void e com retorno, parâmetros e argumentos) e princípio DRY</h1>

    <h2>32. Calculadora básica: </h2>
    <p> Desenvolver uma função que realize a soma de dois números quaisquer e exiba o resultado.</p>

    <header>
        
        <?php
            $a = 17;
            $b = 13;

           function somar($a, $b) {
                return $a + $b;
            }

            echo "$a + $b = " . somar($a, $b);
        ?>

    </header>
</body>
</html>