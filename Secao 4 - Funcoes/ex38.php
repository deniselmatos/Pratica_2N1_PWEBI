<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
<body>
    <h1>Seção 4: Funções (void e com retorno, parâmetros e argumentos) e princípio DRY</h1>

    <h2>38. Formatação de preços: </h2>
    <p> Implementar uma função que receba um valor monetário e o retorne formatado corretamente para exibição
    </p>

    <header>
        
        <?php
            function formatarValor($v) {
                return "R$" . number_format($v, 2, ',', '.');
            }
            echo formatarValor(1234.56);
        ?>

    </header>
</body>
</html>