<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
<body>
    <h1>Seção 4: Funções (void e com retorno, parâmetros e argumentos) e princípio DRY</h1>

    <h2>34. Média de notas:</h2>
    <p>Criar uma função que receba um conjunto de notas de um aluno e calcule a média final, retornando esse valor.</p>

    <header>
        
        <?php
            function mediaNotas($notas) {
                $soma = array_sum($notas);
                return $soma / count($notas);
            }
            
            $notas = [9.2, 10.0, 9.5, 9.8];
            echo "Média final: " . number_format(mediaNotas($notas), 1);

        ?>

    </header>
</body>
</html>