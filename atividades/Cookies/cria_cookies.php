<?php

$nome = $_GET['nome'];

$cidade = $_GET['cidade'];

setcookie("Nome", $nome);
setcookie("Cidade",  $cidade);

header("location:mensagem.php");

?>