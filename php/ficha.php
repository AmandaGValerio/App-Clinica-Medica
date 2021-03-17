<?php
    require 'buscarPaciente.php'

    header('Content-Type: application/json')

    echo '$row["nome"]'

    $server = "127.0.0.1";
    $banco = "app-clinica";
    $usuario = "app-adm";
    $senhah = "senha123";
    $link = mysqli_connect($server, $usuario, $senhah, $banco);

    if (!$link) {
        echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    $sql = "SELECT `nome`, `telefone`, `cpf`, `nascimento` FROM `paciente` WHERE `cpf` = '$row["cpf"]'; ";
    $result = mysqli_query($link, $sql);
    $r = mysqli_fetch_assoc($result);


?>