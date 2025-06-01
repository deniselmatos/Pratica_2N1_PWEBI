<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
</head>
<body>
    <h1>Seção 2: Estruturas Condicionais (if, else, switch)</h1>

    <h2>17. Alerta climático:</h2>
    <p>Com base na temperatura atual, emita alertas:</p>

    <ul>
        <li>Abaixo de 0◦C: "Alerta de Gelo!"</li>
        <li>Entre 0◦C e 15◦C: "Clima Ameno"</li>
        <li>Entre 15◦C e 25◦C: "Clima Agradável"</li>
        <li>Acima de 25◦C: "Atenção: Calor Extremo!"</li>
    </ul>

    <header>
        <?php
            $temperatura = -4;

            if ($temperatura < 0) {
                echo "Alerta de Gelo!  e a temperatura é: $temperatura";
            } elseif ($temperatura >= 0 && $temperatura < 15) {
                echo "Clima Ameno e a temperatura é: $temperatura";
            } elseif ($temperatura >= 15 && $temperatura <= 25) {
                echo "Clima Agradável e a temperatura é: $temperatura";
            } else {
                echo "Atenção: Calor Extremo!";
            }
                
        ?>

    </header>
</body>
</html>