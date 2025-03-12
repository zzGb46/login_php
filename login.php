<?php
include 'conexao.php';
if (empty($_GET['usuario'] || empty($_GET['senha']))) {
    header('Location:index.php');
}

$usuario = mysqli_real_escape_string($mysqli, $_GET['usuario']);
$senha = mysqli_real_escape_string($mysqli, $_GET['senha']);

$query = "SELECT * from usuario where usuario = '$usuario' and senha = '$senha'";
$resultado = mysqli_query($mysqli, $query);
$row = mysqli_num_rows($resultado);

if($row==1){
    
}
