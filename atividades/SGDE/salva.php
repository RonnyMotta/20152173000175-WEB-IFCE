<?php

$conexao = mysqli_connect('localhost', 'root', '', 'sgde');
mysqli_set_charset($conexao, 'UTF8');
IF($conexao -> connect_error){
die("falha ao realizar a conexão: " .$conexao -> connect_error);
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha= $_POST['senha'];
$repsenha = $_POST['repsenha'];

$sql = "INSERT INTO administrador VALUES ";
$sql .= "(null,'$nome', '$email','$telefone',  '$senha', '$repsenha')";

if($conexao -> query($sql) == TRUE){
    echo "Usuário incluído com sucesso!";
     header("Location:listaADM.php");
    }else{
    echo " Erro: " .$sql . "br" .$conexao->error;
}
    $conexao->close();

    ?>