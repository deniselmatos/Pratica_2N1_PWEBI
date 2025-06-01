<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 02N1 - Sintaxe do PHP</title>
</head>
<body>
    <h1>Seção 1: Variáveis e Tipos de Dados</h1>

    <h2>10. Contagem de palavras de resumo:</h2>

    <ul>
        <li>Crie uma variável com um parágrafo para o IFCE</li>
        <li>Conte os caracteres com funcão nativa.</li>
        <li>Use a documentação oficial: https://www.php.net/manual/ptBR/language.types.string.php</li>
    </ul>

    <header>
        <?php
            $paragrafo = "O Instituto Federal de Educação, Ciência e Tecnologia do Ceará (IFCE) é um Instituto Federal de educação básica, profissional e superior, pluricurricular e multicampi, com atuação no Ceará. Especializado na oferta de educação profissional e tecnológica, nas diferentes modalidades de ensino, com base na conjugação de conhecimentos técnicos e tecnológicos com a prática pedagógica, atua em todas as regiões do estado por meio de seus 32 campi e atendendo mais de 33 mil alunos em uma área total instalada em mais de 5,9 milhões de m².";

            $total_carac = strlen($paragrafo);

            echo "Resumo: <br><br> $paragrafo<br><br>";
            echo "Número de caracteres: $total_carac";
        ?>
    </header>
</body>
</html>