<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
</head>
<body>
    <h1>Seção 2: Estruturas Condicionais (if, else, switch)</h1>

    <h2>11. Controle de acesso:</h2>

    <p>Um sistema de portaria precisa verificar a idade de um visitante. Se for maior ou igual a 18 anos, exiba "Acesso Liberado"; caso contrário, "Acesso Negado".</p>

    <header>
        <?php
            $idade = 23;

            if ($idade >= 18) {
                echo "Acesso Liberado e a idade é: $idade";
            } else {
                echo "Acesso Negado e a idade é: $idade";
            }
        ?>

    </header>
</body>
</html>