<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
<body>
    <h1>Seção 4: Funções (void e com retorno, parâmetros e argumentos) e princípio DRY</h1>

    <h2>39. Cálculo de área de terreno: </h2>
    <p> Desenvolver uma função que calcule e retorne a área de um terreno retangular, dados seus lados.
    </p>

    <header>
        
        <?php
            function calcularArea($base , $altura) {
                return $base  * $altura;
            }
            echo "A área do terreno é: " . calcularArea(10, 2.5) . " m²";
        ?>

    </header>
</body>
</html>