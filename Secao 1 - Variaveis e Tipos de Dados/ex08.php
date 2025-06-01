<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
</head>
<body>
    <h1>Seção 1: Variáveis e Tipos de Dados</h1>

    <h2>8. Mudança de categoria:</h2>

    <ul>
        <li>Defina uma variável com código alfanumérico.</li>
        <li>Atualize para um número e exiba antes/depois.</li>
    </ul>

    <header>
        <?php
            $cod = "DNS20"; 
            echo "Código: $cod <br>";

            $cod = 20;
            echo "Código atualizado: $cod";
        ?>
    </header>
</body>
</html>