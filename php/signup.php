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

//variaveis para cadastro
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password2'];
$confpassword = $_POST['confirmpassword'];

if($password == $confpassword){
    $sql = "INSERT INTO usuarios (`nome`, `email`, `senha`) VALUES ('$fullname', '$email', '$password')";
    if (mysqli_query($link, $sql)) {
        //redirecionar para a pagina de index
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
    }
} else{
    echo "senhas diferentes";
}

?>