<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
<body>
    <h1>Seção 4: Funções (void e com retorno, parâmetros e argumentos) e princípio DRY</h1>

    <h2>37. Personalização de mensagem:</h2>
    <p> Criar uma função que gere uma saudação personalizada para um usuário, recebendo o nome dele como entrada.</p>

    <header>
        
        <?php
            function saudar($nome){
                echo "Olá, $nome!";
            } 
            saudar("Maria");
        ?>

    </header>
</body>
</html>