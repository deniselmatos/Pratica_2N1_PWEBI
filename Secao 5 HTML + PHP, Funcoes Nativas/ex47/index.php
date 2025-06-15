<?php
    require_once 'bd.php';  

    $conn = new mysqli($bd_host, $bd_user, $bd_pass);

    if ($conn->connect_error) {
        die("Erro:" . $conn->connect_error);
    }

    echo "A configuração do banco foi realizada com sucesso";
?>