<html>
<head>
    <title>Editar</title>
    <style type="text/css">
        input{
            display: block;
            margin-bottom: 1em;
            padding: 5px
        }
    </style>
</head>
    <body>
        <?php
            //Recebe os dados a serem editados
            $id = filter_input(INPUT_POST, 'id');
            $nome = filter_input(INPUT_POST, 'nome');
            $email = filter_input(INPUT_POST, 'email');
            $telefone = filter_input(INPUT_POST, 'telefone');
            $senha = filter_input(INPUT_POST, 'senha');
            $repsenha = filter_input(INPUT_POST, 'repsenha');
        ?>
        <h2>Alteração de dados</h2>
        <form action="salvaed.php" method="GET">
            <!-- Jogamos os valores a serem editados dentro dos inputs no campo value -->
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="text" name="nome" value="<?php echo $nome; ?>">
            <input type="text" name="email" value="<?php echo $email; ?>">
             <input type="text" name="telefone" value="<?php echo $telefone; ?>">
              <input type="password" name="senha" value="<?php echo $senha; ?>">
               <input type="password" name="repsenha" value="<?php echo $repsenha; ?>">
            <input type="submit" value="Salvar alterações">
        </form>
    </body>
</html>