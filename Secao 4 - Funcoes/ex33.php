<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
<body>
    <h1>Seção 4: Funções (void e com retorno, parâmetros e argumentos) e princípio DRY</h1>

    <h2>33. Cálculo de custo total:</h2>
    <p> Implementar uma função que calcule e retorne o custo total de vários itens, recebendo o preço unitário e a quantidade. O resultado deve ser usado em um cálculo posterior.</p>

    <header>
        
        <?php
            function calcularCusto($preco, $qtde){
                return $preco * $qtde;
            }
            echo "Custo total: R$" . number_format(calcularCusto(25.50, 2), 2, ',', '.');

        ?>

    </header>
</body>
</html>