<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
</head>
<body>
    <h1>Seção 2: Estruturas Condicionais (if, else, switch)</h1>

    <h2>18. Preferência de cor:</h2>
    <p>Um site permite que o usuário escolha uma cor de tema. Se a cor escolhida for "Vermelho", "Azul" ou "Verde", exiba uma mensagem de confirmação. Caso contrário, sugira uma cor padrão.</p>

    <header>
        <?php
            $cor = "Rosa"; 
    

            if ($cor == "Vermelho" || $cor == "Azul" || $cor == "Verde") {
                echo "Você escolheu a cor: $cor";
            } else {
                echo "Cor indisponível. Sugestão: Vermelho";
            }
                
        ?>

    </header>
</body>
</html>