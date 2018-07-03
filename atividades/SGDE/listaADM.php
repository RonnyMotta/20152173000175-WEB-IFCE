<!DOCTYPE html>
<html lang="es">
<head>
    <title>Pagina Inicial</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="icons/book.ico" />
    <script src="sweet-alert.min.js"></script>
    <link rel="stylesheet" href="sweet-alert.css">
    <link rel="stylesheet" href="material-design-iconic-font.min.css">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="jquery-1.11.2.min.js"><\/script>')</script>
    <script src="modernizr.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="main.js"></script>
</head>
<body>
<div class="navbar-lateral full-reset">
    <div class="visible-xs font-movile-menu mobile-menu-button"></div>
    <div class="full-reset container-menu-movile custom-scroll-containers">
        <div class="logo full-reset all-tittles">
            <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button"
               style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i>
            SGDE
        </div>
        <div class="full-reset" style="background-color:#87b40d; padding: 10px 0; color:#fff;">
            <figure>
                <img src="img/logo.png" alt="Biblioteca" class="img-responsive center-box" style="width:55%;">
            </figure>
            <p class="text-center" style="padding-top: 15px;">Sistema de Gestão Documental Escolar</p>
        </div>
        <div class="full-reset nav-lateral-list-menu">
            <ul class="list-unstyled">
                <li><a href="home.html"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Início</a></li>
                <li>
                    <div class="dropdown-menu-button"><i class="zmdi zmdi-case zmdi-hc-fw"></i>&nbsp;&nbsp; Administração
                        <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                    <ul class="list-unstyled">
                        <li><a href=".html"><i class="zmdi zmdi-balance zmdi-hc-fw"></i>&nbsp;&nbsp; Dados instituição</a></li>

                    </ul>
                </li>
                <li>
                    <div class="dropdown-menu-button"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Registro de usuários <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                    <ul class="list-unstyled">
                        <li><a href="administrador.html"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp; Novo administrador</a></li>

                    </ul>
                </li>
                <li>
                    <div class="dropdown-menu-button"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>&nbsp;&nbsp; Documentos <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                    <ul class="list-unstyled">
                        <li><a href="NovoDocumento.html"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Novo documento</a></li>
                        <li><a href="DocArquivados.php"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Documentos Arquivados</a></li>
                    </ul>
                </li>

                <li><a href=".html"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i>&nbsp;&nbsp; Estatísticas</a></li>
                <li><a href=".html"><i class="zmdi zmdi-wrench zmdi-hc-fw"></i>&nbsp;&nbsp; Configurações avançadas</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="content-page-container full-reset custom-scroll-containers">
    <nav class="navbar-user-top full-reset">
        <ul class="list-unstyled full-reset">
            <figure>
                <img src="img/user01.png" alt="user-picture" class="img-responsive img-circle center-box">
            </figure>
            <li style="color:#fff; cursor:default;">
                <span class="all-tittles">Admin</span>
            </li>
            <li  class="tooltips-general exit-system-button" data-href=".html" data-placement="bottom" title="Sair do sistema">
                <i class="zmdi zmdi-power"></i>
            </li>
            <li  class="tooltips-general search-book-button" data-href=".html" data-placement="bottom" title="Buscar documento">
                <i class="zmdi zmdi-search"></i>
            </li>
            <li  class="tooltips-general btn-help" data-placement="bottom" title="Ajuda">
                <i class="zmdi zmdi-help-outline zmdi-hc-fw"></i>
            </li>
            <li class="mobile-menu-button visible-xs" style="float: left !important;">
                <i class="zmdi zmdi-menu"></i>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div class="page-header">
            <h1 class="all-tittles"> Administradores</h1>
        </div>
    </div>

    <div class="container-fluid"  style="margin: 50px 0;">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3">
                <img src="img/user01.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">

                Bem-vindo à seção em que a lista de administradores está localizada, você pode desativar a conta de qualquer administrador ou excluir os dados se não houver empréstimos associados à conta  </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 lead">
                <ol class="breadcrumb">
                    <li><a href="administrador.html">Novo administrador</a></li>
                    <li class="active">listado de administradores</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <h2 class="text-center all-tittles">Lista de administradores</h2>
        <table class="div-table">
              <tr class="div-table-row div-table-head">
              <td class="div-table-cell"> &nbsp;Id</td>
              <td class="div-table-cell">Nome</td>
              <td class="div-table-cell">Email</td>
               <td class="div-table-cell">telefone</td>
                <td class="div-table-cell">senha</td>
                 <td class="div-table-cell">repsenha</td>
                 <td class="div-table-cell">Editar</td>
                 <td class="div-table-cell">Excluir</td>
              </tr>


             <?php
                                            //Área de notificações

                                            //Se existe a variável remocao, então
                                            if( isset($_GET['remocao'])){
                                                //Se remoção tem true, os dados foram removidos
                                                if( $_GET['remocao'] == "true" ){
                                                    echo "<p>Os dados foram removidos.</p>";
                                    }else{
                                    echo "<p>Não foi possivel remover os dados.</p>";
                                    }
                                    }
                                    //Se existe a variável alteração, então
                                    if( isset($_GET['alteracao']) ){
                                    //Se alteracao tem true, os dados foram alterados
                                    if( $_GET['alteracao'] == "true" ){
                                    echo "<p>Os dados foram alterados.</p>";
                                    }else{
                                    echo "<p>Não foi possivel alterar os dados.</p>";
                                    }
                                    }
                                    ?>

                                        <?php
                                                //Estabelece a conexao com o mysql
                                                $conexao = mysqli_connect('localhost','root','','sgde');
                                                mysqli_set_charset($conexao, 'UTF8');
                                                if( !$conexao ){
                                                    echo "Ops.. Erro na conexão.";
                                                    exit;
                                                }
                                                //Carrega os dados
                                                $sql = "SELECT * FROM administrador";
                                                $consulta = mysqli_query($conexao, $sql);
                                                if( !$consulta ){
                                                    echo "Erro ao realizar consulta. Tente outra vez.";
                                                    exit;
                                                }
                                                //se tudo deu certo, exibe os dados
                                                while( $dados = mysqli_fetch_assoc($consulta) ){



                                        echo "<tr class='div-table-row'>";

                                        echo "<td class='div-table-cell'>"  .$dados['id']. "</td>";
                                        echo "<td class='div-table-cell'>" .$dados['nome']. "</td>";
                                        echo "<td class='div-table-cell'>" .$dados['email']. "</td>";
                                        echo "<td class='div-table-cell'>" .$dados['telefone']. "</td>";
                                        echo "<td class='div-table-cell'>" .$dados['senha']. "</td>";
                                        echo "<td class='div-table-cell'>" .$dados['repsenha']. "</td>";

                                        echo "<td class='div-table-cell'>";
                                        echo "<form action='edita.php' method='POST'>";
                                            echo "<input name='id' type='hidden' value='" .$dados['id']. "'>";
                                            echo "<input name='nome' type='hidden' value='" .$dados['nome']. "'>";
                                            echo "<input name='email' type='hidden' value='" .$dados['email']. "'>";
                                            echo "<input name='telefone' type='hidden' value='" .$dados['telefone']. "'>";
                                            echo "<input name='senha' type='hidden' value='" .$dados['senha']. "'>";
                                            echo "<input name='repsenha' type='hidden' value='" .$dados['repsenha']. "'>";
                                            echo "<button class='btn btn-success'><i class='zmdi zmdi-refresh'></i></button>";
                                            echo "</form>";
                                        echo "</td class='div-table-cell'>";

                                        // Cria um formulário para remover os dados
                                        // Colocamos o id dos dados a serem removidos dentro do input hidden
                                        echo "<td class='div-table-cell'>";
                                        echo "<form action='remove.php' method='post'>";
                                            echo "<input name='id' type='hidden' value='" .$dados['id']. "'>";
                                            echo "<button class='btn btn-danger'><i class='zmdi zmdi-delete'></i></button>";
                                            echo "</form>";
                                        echo "</td>";

                                        echo "</tr>";
                                        }
                                        ?>
                                    </table>

            </div>


<div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center all-tittles">ajuda do sistema</h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; OK </button>
            </div>
        </div>
    </div>
</div>
<footer class="footer full-reset">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <h4 class="all-tittles">Sobre: </h4>
                <p> </p>
            </div>
            <div class="col-xs-12 col-sm-6">
                <h4 class="all-tittles">Desenvolverdor</h4>
                <ul class="list-unstyled">
                    <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; Ronny Motta <i class="zmdi zmdi-facebook zmdi-hc-fw footer-social"></i><i class="zmdi zmdi-twitter zmdi-hc-fw footer-social"></i></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright full-reset all-tittles">© 2018 Ronny Motta</div>
</footer>
</div>

</body>
</html>
?>