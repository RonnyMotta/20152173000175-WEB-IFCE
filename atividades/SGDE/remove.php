<?php
    //recebe o id dos dados que serão apagados
    $id = filter_input(INPUT_POST, 'id');

    //estabelece a conexão
    $conexao = mysqli_connect("localhost","root","","sgde");
    if( !$conexao ){
        echo "Ops.. Erro na conexão.";
        exit;
    }
    //Executa a query
    $sql = "DELETE FROM administrador WHERE id=".$id;
    $remove = mysqli_query($conexao, $sql);
    //Se falhou, redireciona pra .php com remove igual a false
    if( !$remove ){
        header("Location:listaADM.php?remove=false");
        exit;
    }
    //se tudo deu certo, redireciona pra listaADM.php com remove igual a true
    header("Location:listaADM.php?remocao=true");
?>