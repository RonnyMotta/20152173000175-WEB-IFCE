<?php
if(isset($_GET['id']))
{
// if id is set then get the file with the id from database

//estabelece a conexão
    $conexao = mysqli_connect("localhost","root","","sgde");
    if( !$conexao ){
        echo "Ops.. Erro na conexão.";
        exit;
    }

    $query = "SELECT id, nome FROM upload";
    $result = mysqli_query($conexao, $query) or die('Error, query failed');
    if(mysqli_num_rows($result) == 0)
    {
    echo "Database is empty <br>";
    }
    else
    {
    while(list($id, $nome) = mysqli_fetch_array($result))
    {


    }
    }

$id    = $_GET['id'];
$query = "SELECT nome, tamanho, tipo, conteudo " .
         "FROM upload WHERE id = '$id'";

$result = mysqli_query($conexao, $query) or die('Error, query failed');
list($nome, $tamanho, $tipo, $conteudo) = mysqli_fetch_array($result);

header("Content-length: $size");
header("Content-type: $type");
header("Content-Disposition: attachment; filename=$name");

echo $content;


exit;
}

?>