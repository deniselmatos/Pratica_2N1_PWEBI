<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
</head>
<body>
    <h1>Seção 2: Estruturas Condicionais (if, else, switch)</h1>

    <h2>15. Escolha de bebida:</h2>

    <p>Um menu de cafeteria oferece opções de bebidas. Dada uma variável com o nome de uma bebida ("Café", "Chá", "Suco"), exiba uma mensagem como "Você escolheu [Bebida]". Se a bebida não estiver no menu, exiba "Bebida não disponível".</p>

    <header>
        <?php
            $bebida = "Chá";

            if ($bebida == "Café" || $bebida == "Chá" || $bebida == "Suco") {
                echo "Você escolheu: $bebida";
            } else {
                echo "Bebida não disponível";
            }
        ?>

    </header>
</body>
</html>