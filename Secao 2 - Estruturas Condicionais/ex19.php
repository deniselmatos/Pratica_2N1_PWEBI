<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
</head>
<body>
    <h1>Seção 2: Estruturas Condicionais (if, else, switch)</h1>

    <h2>19. Cálculo de salário:</h2>
    <p>Uma folha de pagamento precisa determinar o salário base de um funcionário. Com base no cargo ("Desenvolvedor", "Designer", "Gerente"), defina e exiba o salário correspondente.</p>

    <header>
        <?php
            $cargo = "Designer"; 

            switch ($cargo) {
                case "Desenvolvedor":
                    $salario = 5000;
                    break;
                case "Designer":
                    $salario = 3000;
                    break;
                case "Gerente":
                    $salario = 7000;
                    break;
                default:
                    $salario = 0;
            }

            if ($salario > 0) {
                echo "Cargo: $cargo<br> Salário base: R$ " . number_format($salario, 3, ',', '.');
            } else {
                echo "Cargo inválido.";
            }    
        ?>

    </header>
</body>
</html>