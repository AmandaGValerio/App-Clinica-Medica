<?php 
//logando no banco
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

$nome = $_POST['cNome'];
$nasc = $_POST['txtNasc'];
$convenio = $_POST['txtConvenio'];
$telefone = $_POST['txtTelefone'];
$cpf = $_POST['txtCpf'];

$sql = "INSERT INTO `paciente`(`nome`, `telefone`, `cpf`, `nascimento`) VALUES ('$nome','$telefone','$cpf','$nasc')";
if (mysqli_query($link, $sql)) {
    //redirecionar para a pagina principal com mensagem de sucesso
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

?>