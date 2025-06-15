<?php

function calcular_media($valores) {
    if (count($valores) === 0) {
        return 0;
    }
    return array_sum($valores) / count($valores);
}

function formatar_preco($preco) {
    return "R$ " . number_format($preco, 2, ',', '.');
}
?>