<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
</head>
<body>
    <h1>Seção 3: Estruturas de Repetição (for, while, do..while)</h1>

    <h2>Listagem de participantes:</h2>
    <p> Exibir todos os nomes de uma lista de participantes para um evento.</p>

    <header>
        
        <?php
            $participantes = [
                "Francisco Oswaldo",
                "Jaqueline Rocha",
                "Ruth Oliveira",
                "Márcia Ferreira",
                "Natália Dias",
                "José Bezerra",
                "Helena Silva",
                "Rosa Queiroz",
                "João Paulo",
                "Odete dos Santos"
            ];

            foreach ($participantes as $participante) {
                echo "$participante <br>";
            }
            
        ?>

    </header>
</body>
</html>