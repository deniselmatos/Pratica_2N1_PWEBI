<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
</head>
<body>
    <h1>Seção 2: Estruturas Condicionais (if, else, switch)</h1>

    <h2>20. Verificação de acesso (Login):</h2>
    <p>Um sistema de login precisa verificar se um usuário está ativo e se possui permissões de administrador. Apenas se ambas as condições forem verdadeiras, conceda o acesso total Não implemente um sistema de login, apenas simule.</p>

    <header>
        <?php
            $user_ativo = true;         
            $adm = false;             

            if ($user_ativo && $adm) {
                echo "Acesso total concedido.";
            } else {
                echo "Acesso restrito.";
            }    
        ?>

    </header>
</body>
</html>