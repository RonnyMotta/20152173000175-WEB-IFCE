<?php
    //Recebe os dados com as alterações feitas
    $id = filter_input(INPUT_POST, 'id');
    $novoNome = filter_input(INPUT_POST, 'nome');
    $novoEmail = filter_input(INPUT_POST, 'email');
     $novoTelefone = filter_input(INPUT_POST, 'telefone');
      $novoSenha = filter_input(INPUT_POST, 'senha');
       $novoRepsenha = filter_input(INPUT_POST, 'repsenha');

    //Estabelece a conexão com o mysql
    $conexao = mysqli_connect('localhost','root',' ','sgde');
    if( !$conexao ){
        header("Location:listaADM.php?alteracao=false");
        exit;
    }
    //Executa a atualização no banco de dados
    $sql = ("UPDATE administrador SET nome='" . $novoNome . "', email='" . $novoEmail . "',
    telefone='" . $novoTelefone . "', senha='" . $novoSEnha . "', repsenha='" . $novoRepsenha . "', WHERE id= ".$i);
    $update = mysqli_query($conexao, $sql);

    //Se não deu certo, redireciona pra exibe.php com alteracao igual a false
    if( !$update ){
        header("Location:DocArquivdos.php?$alteracao=false");
        exit;
    }
    //se tudo deu certo, redireciona pra exibe.php com alteracao igual a true
    header("Location:listaADM.php?$alteracao=true");
?>