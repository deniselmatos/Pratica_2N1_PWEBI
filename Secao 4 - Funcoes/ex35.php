<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
<body>
    <h1>Seção 4: Funções (void e com retorno, parâmetros e argumentos) e princípio DRY</h1>

    <h2>35. Validação de Código:</h2>
    <p>Desenvolver uma função que verifique se um código numérico é par ou ímpar, retornando verdadeiro ou falso</p>

    <header>
        
        <?php
            function Par($num) {
                return $num % 2 === 0;
            }
            echo Par(7) ? "O número é par." : "O número é ímpar";
        ?>

    </header>
</body>
</html>