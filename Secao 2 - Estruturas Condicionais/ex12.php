<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
</head>
<body>
    <h1>Seção 2: Estruturas Condicionais (if, else, switch)</h1>

    <h2>12. Classificação de temperatura:</h2>

    <p>Um sensor meteorológico registra a temperatura. Classifique e exiba se a temperatura  ́e "Positiva", "Negativa" ou "Zero".</p>

    <header>
        <?php
             $temperatura = 21;

             if ($temperatura > 0) {
                 echo "Temperatura Positiva e a temperatura é: $temperatura";
             } elseif ($temperatura < 0) {
                 echo "Temperatura Negativa e a temperatura é: $temperatura";
             } else {
                 echo "Temperatura Zero e a temperatura é: $temperatura";
             }
        ?>

    </header>
</body>
</html>