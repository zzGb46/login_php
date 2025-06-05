<?php
require 'conexao.php';


if(isset($_GET['usuario'], $_GET['senha'], $_GET['nome'])){

global $pdo;
$consulta = "SELECT * from tb_user where id_user = ':id'";
$resolucao = $pdo->prepare($consulta);
$resolucao->bindParam(':id', $id);
$resolucao->execute();
$row_msg = $resolucao->fetch(PDO::FETCH_ASSOC);

}





    // $query = "INSERT INTO tb_user(usuario, senha, nome)
    // values(
    // :user,
    // :senha,
    // :nome);";

    // $resultado = $pdo->prepare($query);
    // $resultado->bindParam(':usuario', $user);
    // $resultado->bindParam(':senha', $senha);
    // $resultado->bindParam(':nome', $nome);
    // $sucesso = $resultado->execute();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>

<body>
    <a href="./sistema/sistema.php"><button id="botao">voltar</button></a>
    <div id="cadastrar">
        <form method="GET" action id="form">
            <input type="text" name="usuario" placeholder="user"
            value="<?php if(isset($row_msg['usuario'])){echo $row_msg['usuario']; }?>"><br>

            <input type="password" name="senha" placeholder="senha"><br>
            <input type="text" name="nome" placeholder="nome"><br>
            <input type="submit" placeholder="ENVIAR">
        </form>
    </div>

</body>

</html>