<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
</head>
<body>
    <h1>Seção 3: Estruturas de Repetição (for, while, do..while)</h1>

    <h2>Total de vendas:</h2>
    <p>Calcular o total de vendas de um mês, somando os valores diários do dia 1 ao dia 100. Use números aleatórios para cada valor, dentro de um intervalo de R$ 50,00 a R$ 5.000,00. </p>

    <header>
        
        <?php
            $total = 0;
            for ($dia = 1; $dia <= 100; $dia++) {
                $vendas = rand(5000, 500000) / 100;
                $total += $vendas;
            }
            echo "Total de vendas: R$ " . number_format($total, 2, ',', '.');
        ?>

    </header>
</body>
</html>