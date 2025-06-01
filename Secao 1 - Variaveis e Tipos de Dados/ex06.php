<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
</head>
<body>
    <h1>Seção 1: Variáveis e Tipos de Dados</h1>

    <h2>6. Cálculo de orçamento:</h2>

    <ul>
        <li>Declare duas variáveis: custoMaterial e custoMaoDeObra.</li>
        <li>Calcule e exiba o custo total.</li>
    </ul>

    <header>
        <?php
            $custoMaterial = 550;
            $custoMaoDeObra = 3000;

           $custo_total = $custoMaterial + $custoMaoDeObra;

            echo "Custo de material: R$ $custoMaterial<br>";
            echo "Custo de mão de obra: R$ $custoMaoDeObra<br>";
            echo "Custo total do orçamento: R$ $custo_total<br>";

            
        ?>
    </header>
</body>
</html>