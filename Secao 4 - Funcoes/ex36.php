<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
<body>
    <h1>Seção 4: Funções (void e com retorno, parâmetros e argumentos) e princípio DRY</h1>

    <h2>36. Sistema de elegibilidade:</h2>
    <p> Refatorar a lógica de verificação de maioridade. Em uma função reutilizável, que receba a idade e retorne o status de elegibilidade.</p>

    <header>
        
        <?php
            function verificarElegibilidade($idade) {
                return ($idade >= 18) ? "Acesso Liberado" : "Acesso Negado";
            }
                
            echo verificarElegibilidade(29);
        ?>

    </header>
</body>
</html>