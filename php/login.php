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

$user = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT `senha` FROM `usuarios` WHERE `nome` = '$user';";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
if ($row['senha'] == $pass && $pass != ""){
    if ($user == "maria"){
        header('Location: ../paginas/agendaMedicoR.html');
    }
    else {
        header('Location: ../paginas/agendaMedico.html');
    }
}else{
    //voltar para a página e exibir uma mensagem de erro
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Usuário ou senha incorretos')
    window.location.href='../index.html';
    </SCRIPT>");
    //header('Location: ../index.html');
}

?>
