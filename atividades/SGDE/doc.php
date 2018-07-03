<?php

$conexao = mysqli_connect('localhost', 'root', '', 'sgde');
mysqli_set_charset($conexao, 'UTF8');
IF($conexao -> connect_error){
die("falha ao realizar a conexão: " .$conexao -> connect_error);
}
$categoria = $_POST['categoria'];
$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$data1 = $_POST['data1'];
$data2 = $_POST['data2'];
$nmae = $_POST['nmae'];
$npai = $_POST['npai'];
$cidade= $_POST['cidade'];
$endereco = $_POST['endereco'];
$anexo = $_POST['anexo'];

$sql = "INSERT INTO documentos VALUES ";
$sql .= "('$categoria','$codigo', '$nome', '$data1', '$data2', '$nmae','$npai',
        '$cidade', '$endereco' '$anexo')";

if($conexao -> query($sql) == TRUE){
    echo "Usuário incluído com sucesso!";
    }else{
    echo " Erro: " .$sql . "br" .$conexao->error;
}
    $conexao->close();

    ?>