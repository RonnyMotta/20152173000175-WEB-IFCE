
<?php

$conexao = mysqli_connect('localhost', 'root', '', 'sgde');
mysqli_set_charset($conexao, 'UTF8');
IF($conexao -> connect_error){
die("falha ao realizar a conexão: " .$conexao -> connect_error);
}
  session_start();
  $emailt = $_POST['email'];
  $senhat = $_POST['senha'];

  $cont = "select * from administrador where email = '$emailt' and senha = '$senhat'";

  $result = mysqli_query($conexao, $cont);

$resultado = mysqli_fetch_assoc($result);

  if($resultado ) {
    header('location: home.html');
  }
   else {
  	echo "<script> alert('usuario e senha não correspondem. ');
        history.back();</script>";
  }

  ?>

