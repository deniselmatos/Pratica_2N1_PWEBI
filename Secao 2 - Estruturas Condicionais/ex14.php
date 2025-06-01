<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
</head>
<body>
    <h1>Seção 2: Estruturas Condicionais (if, else, switch)</h1>

    <h2>14. Agendamento semanal:</h2>

    <p>Um aplicativo de agenda exibe compromissos. Dada uma variável numérica representando o dia da semana (1 para Domingo, 2 para Segunda, etc.), exiba o nome do dia correspondente.</p>

    <header>
        <?php
            $dia = 2;

            switch ($dia) {
                case 1:
                    echo "Domingo";
                    break;
                case 2:
                    echo "Segunda-feira";
                    break;
                case 3:
                    echo "Terça-feira";
                    break;
                case 4:
                    echo "Quarta-feira";
                    break;
                case 5:
                    echo "Quinta-feira";
                    break;
                case 6:
                    echo "Sexta-feira";
                    break;
                case 7:
                    echo "Sábado";
                    break;
                default:
                    echo "Dia inválido";
            }
        ?>

    </header>
</body>
</html>