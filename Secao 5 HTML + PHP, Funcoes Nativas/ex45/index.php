<?php

    include_once 'helpers.php';

    $valores = [2, 17, 23, 37, 55, 79];
    $media = calcular_media($valores);
    echo "A média é: " . $media . "<br>";

    $preco = 1234.56;
    echo "Preço formatado: " . formatar_preco($preco);
?>