<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
</head>
<body>
    <h1>Seção 3: Estruturas de Repetição (for, while, do..while)</h1>

    <h2>Ciclo de produção:</h2>
    <p>Simular um ciclo de produção que se repete enquanto a quantidade produzida for menor que 5. A cada ciclo, registrar e exibir a quantidade atual.</p>

    <header>
        
        <?php
            $quantidade =10;
            $producao =[];
            
            while (count($producao) < 5) {
                $item = count($producao) + 1;
                $producao[] = $item;
            }
            foreach ($producao as $p) {
                echo "Quantidade atual: $p<br>";
            }
        ?>

    </header>
</body>
</html>