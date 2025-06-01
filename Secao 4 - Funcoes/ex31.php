<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
</head>
<body>
    <h1>Seção 4: Funções (void e com retorno, parâmetros e argumentos) e princípio DRY</h1>

    <h2>31. Mensagem de boas-vindas: </h2>
    <p> Criar uma função que exiba uma mensagem de boas-vindas padrão em várias páginas de um site, sem precisar de informações adicionais.</p>

    <header>
        
        <?php
           function exibirBoasVindas(){
                echo "Seja bem-vindo(a) ao site!";
            }
            exibirBoasVindas();
        ?>

    </header>
</body>
</html>