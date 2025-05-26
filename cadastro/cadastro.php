<?php
require '../conexao.php';
if (isset($_POST['user'], $_POST['senha'], $_POST['nome'])) {


    $user = $_POST['user'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];



    $query = "INSERT INTO tb_user(usuario, senha, nome)
    values(
    :user,
    :senha,
    :nome);";

    $resultado = $pdo->prepare($query);
    $resultado->bindParam(':user', $user);
    $resultado->bindParam(':senha', $senha);
    $resultado->bindParam(':nome', $nome);
    $sucesso=$resultado->execute();


    if ($sucesso){
        echo 'Usuario cadastrado com sucesso';
    } else {
        echo 'Erro ao cadastrar';
    }
}