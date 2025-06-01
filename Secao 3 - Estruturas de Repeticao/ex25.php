<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
</head>
<body>
    <h1>Seção 3: Estruturas de Repetição (for, while, do..while)</h1>

    <h2>Exceção em relatório:</h2>
    <p>Exiba uma tabela com número de matrícula, nome completo e nota de PWEB1 de 10 alunos.</p>

    <header>
        
        <?php
            $alunos = [
                ["202501", "José Bezerra", 9.8],
                ["202502", "Helena Silva", 7.5],
                ["202503", "Rosa Queiroz", 8.3],
                ["202504", "João Paulo", 6.0],
                ["202505", "Odete dos Santos", 7.0],
                ["202506", "Francisco Oswaldo", 8.7],
                ["202507", "Jaqueline Rocha", 7.8],
                ["202508", "Ruth Oliveira", 9.6],
                ["202509", "Márcia Ferreira", 6.5],
                ["202510", "Natália Dias", 5.0]
            ];    
            echo "<table border='1'>";
            echo "<tr><th>Matrícula</th><th>Nome</th><th>Nota final</th></tr>";
            foreach ($alunos as $aluno) {
                echo "<tr><td>{$aluno[0]}</td><td>{$aluno[1]}</td><td>{$aluno[2]}</td></tr>";
            }
            echo "</table>";
            
            
        ?>

    </header>
</body>
</html>