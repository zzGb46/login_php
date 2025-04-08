 <?php

 session_start();
include 'conexao.php';


 if(empty($_GET['usuario']) || empty($_GET['senha'])){
    header('Location:index.php');
 }

 $usuario= mysqli_real_escape_string($mysqli, $_GET['usuario']);
 
 $senha= mysqli_real_escape_string($mysqli, $_GET['senha']);


 require_once('model.php');

 if($total ==1){
    $_SESSION['usuario'] = $usuario;
    header('Location: painel.php');
    exit();
 }else{
   $_SESSION['nao_autenticado'] = true;
   header('Location: index.php');
    exit();
 }