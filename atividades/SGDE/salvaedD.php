<?php
    //Recebe os dados com as alterações feitas
    $id = filter_input(INPUT_POST, 'id');
    $novoNome = filter_input(INPUT_POST, 'nome');


    //Estabelece a conexão com o mysql
    $conexao = mysqli_connect('localhost','root',' ','sgde');
    if( !$conexao ){
        header("Location:DocArquivados.php?alteracao=false");
        exit;
    }
    //Executa a atualização no banco de dados
    $sql = ("UPDATE upload SET nome='" . $novoNome . "', WHERE id= ".$i);
    $update = mysqli_query($conexao, $sql);

    //Se não deu certo, redireciona pra exibe.php com alteracao igual a false
    if( !$update ){
        header("Location:DocArquivados.php?$alteracao=false");
        exit;
    }
    //se tudo deu certo, redireciona pra exibe.php com alteracao igual a true
    header("Location:DocArquivdos.php?$alteracao=true");
?>