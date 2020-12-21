<?php

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

$var = $_POST['busca'];

$sql = "SELECT `nome`, `telefone`, `cpf`, `nascimento` FROM `paciente` WHERE `cpf` = '$var'; ";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);

//redirecionar para ficha e preencher com os dados do paciente
?>