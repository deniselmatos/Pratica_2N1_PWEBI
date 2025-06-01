<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
</head>
<body>
    <h1>Seção 2: Estruturas Condicionais (if, else, switch)</h1>

    <h2>13. Sistema de avaliação:</h2>

    <p>Com as duas notas de um aluno, calcule a média. Exiba "Aprovado" se a média for ≥ 7, "Recuperação" se for entre 5 e 6.9, e "Reprovado" se for < 5.</p>

    <header>
        <?php
            $n1 = 10.0; 
            $n2 = 9.5;  

            $media = ($n1 + $n2) / 2;

            if ($media >= 7) {
                echo "Aprovado";
            } elseif ($media >= 5 && $media < 7) {
                echo "Recuperação";
            } else {
                echo "Reprovado";
            }

            echo "<br>E a média é: $media <br>";
        ?>

    </header>
</body>
</html>