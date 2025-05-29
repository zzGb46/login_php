<?php 
require 'conexao.php';
session_start();

if(!isset($_GET['usuario'], $_GET['senha'], $_GET['nome'])){
header('Location:index.php');
}

$usuario = $_GET['usuario'];
$senha = $_GET['senha'];
$nome = $_GET['nome'];

require 'model.php';

if(verificarUsuario($usuario, $senha, $nome)){
$_SESSION['usuario']=$usuario;
$_SESSION['senha'] = $senha;
header('Location:sistema/sistema.php');
}else{
   echo 'erro login😭';
}