<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Recuperação de senha</title>
</head>

<body>
    <?php
    include_once '../conexao.php';
    session_start();

    //Receber dados do formulario
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    //Acessar o IF quando o usuário clicar no botão acessar do formulário
    if (!empty($dados["SendRecupSenha"])) {
        var_dump($dados);

        "SELECT * FROM tb_user;";
    }
    ?>
    <h1>Recuperar senha</h1>
    <form method="POST" action="">
        <div class="form-group">
            <label for="exampleInputEmail1">Insira o e-mail cadastrado</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="usuario">
        </div>
        <input type="submit" value="Recuperar" name="SendRecupSenha">
        <input type="hidden" name="env" value="form">
    </form>
    <?php echo verifica_dados(); ?>

    <h2>Lembrou a senha?</h2><br>
    <a href="../index.php">
        <p>Clique aqui</p>
    </a>
</body>

<?php

// function foi()
// {
//     global $mysqli;
//     $query = $mysqli->query("SELECT id_user, usuario, senha 
//                                     FROM tb_user 
//                                     ");
//     $resultado = $query->fetch_assoc();
//     return $resultado;
// }

// var_export(foi());
?>



</html>