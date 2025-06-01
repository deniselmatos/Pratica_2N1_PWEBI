<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
</head>
<body>
    <h1>Seção 2: Estruturas Condicionais (if, else, switch)</h1>

    <h2>16. Cadastro de usuário:</h2>

    <p>Ao preencher um cadastro, o usuário informa seu estado civil com um código (única letra). Exiba uma descrição para "C" (Casado/a), "S"
        (Solteiro/a), "D" (Divorciado/a) ou "O" (Outro).</p>

    <header>
        <?php
            $estado_civil = "O"; 

            switch ($estado_civil) {
                case "C":
                    echo "Casado/a";
                    break;
                case "S":
                    echo "Solteiro/a";
                    break;
                case "D":
                    echo "Divorciado/a";
                    break;
                case "O":
                    echo "Outro";
                    break;
                default:
                    echo "Código de estado civil inválido";
                }
        ?>

    </header>
</body>
</html>