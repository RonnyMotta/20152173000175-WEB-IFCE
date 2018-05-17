<?php
$nome=$_GET["nome"];
$disciplina=$_GET["disciplina"];
$n1=$_GET["n1"];
$n2=$_GET["n2"];
$n3=$_GET["n3"];
$media=($n1+$n2+$n3)/3;
echo "NOME:  $nome <br><br>  ";
echo "DISCIPLINA:  $disciplina <br><br>  ";
echo "MEDIA:  $media<br><br>  ";
?>

