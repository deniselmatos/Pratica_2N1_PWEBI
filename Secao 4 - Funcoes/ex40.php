<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
<body>
    <h1>Seção 4: Funções (void e com retorno, parâmetros e argumentos) e princípio DRY</h1>

    <h2>40. Log de eventos:</h2>
    <p> Criar uma função que registre uma mensagem de evento junto com o timestamp atual</p>

    <header>
        
        <?php
            function registrarEvento($mensagem){
                $hora = date('Y-m-d H:i:s');
                echo "[$hora] $mensagem";
            }

            registrarEvento("Usuário acessou a página.");
        ?>

    </header>
</body>
</html>