<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
</head>
<body>
    <h1>Seção 1: Variáveis e Tipos de Dados</h1>

    <h2>9. Valor de π (Pi):</h2>

    <ul>
        <li>Declare uma constante ou variável com valor de Pi.</li>
        <li>Caso decida usar constante, use o seguinte padrão: define(“FOO”, “algumacoisa”);</li>
        <li>Exiba o valor com 4 casas decimais.</li>

    </ul>

    <header>
        <?php
            define("PI", 3.1415926535);
            echo "Valor de PI com 4 casas decimais: " . number_format(PI, 4);
        ?>
    </header>
</body>
</html>