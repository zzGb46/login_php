 <?php

 session_start();
include 'conexao.php';

 if(empty($_GET['usuario']) || empty($_GET['senha'])){
    header('Location:index.php');
 }

 $usuario= mysqli_real_escape_string($mysqli, $_GET['usuario']);
 
 $senha= mysqli_real_escape_string($mysqli, $_GET['senha']);

 $query = "SELECT * from usuario where usuario = '$usuario' and senha = '$senha'";
 $resultado = mysqli_query($mysqli, $query);
 $total = mysqli_num_rows($resultado);


 if($total ==1){
    $_SESSION['usuario'] = $usuario;
    header('Location: painel.php');
    exit();
 }else{
   $_SESSION['não_autenticado'] = true;
   header('Location: index.php');
    exit();
 }