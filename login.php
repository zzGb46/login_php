<?php
include 'conexao.php';

if (empty($_GET['usuario'] || empty($_GET['senha']))) {
    echo 'usuario não cadastrado';
    header('Location: index.php');
}

$usuario = mysqli_real_escape_string($mysqli, $_GET['usuario']);

$senha = mysqli_real_escape_string($mysqli, $_GET['senha']);

$query = "SELECT usuario from usuario where usuario = '$usuario' and senha = '$senha'";