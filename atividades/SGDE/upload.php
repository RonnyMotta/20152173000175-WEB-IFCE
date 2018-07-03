
<?php
if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}

 //estabelece a conexão
    $conexao = mysqli_connect("localhost","root","","sgde");
    if( !$conexao ){
        echo "Ops.. Erro na conexão.";
        exit;
    }

$query = "INSERT INTO upload (nome,  tamanho, tipo, conteudo ) ".
"VALUES ('$fileName', $fileSize, '$fileType', '$content')";
mysqli_query($conexao, $query) or die('Error, query failed');


echo "<br>File $fileName uploaded<br>";
header("Location:DocArquivados.php?$alteracao=true");
}
?>