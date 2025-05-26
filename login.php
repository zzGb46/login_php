 <?php
 session_start();
include 'conexao.php';


 if(empty($_GET['usuario']) || empty($_GET['senha'])){
    header('Location:index.php');
    exit;
 }

//  $usuario= mysqli_real_escape_string($mysqli, $_GET['usuario']);
 
//  $senha= mysqli_real_escape_string($mysqli, $_GET['senha']);


$usuario = $_GET['usuario'];
$senha = $_GET['senha'];

//esta sendo usado o banco de dados
 require_once('model.php');

 //JEITO UTILIZADO PARA PDO:
if(verificarUsuario($usuario, $senha)){
   $_SESSION['usuario'] = $usuario;
   header('Location:mailer/formulario.php');
   exit;
}else{
   echo 'probreminha';
}


//JEITO UTILIZADO PARA MYSQLI:
//  if($total ==1){
//     $_SESSION['usuario'] = $usuario;
//     header('Location: painel.php');
//     exit();
//  }else{
//    $_SESSION['nao_autenticado'] = true;
//    header('Location: index.php');
//     exit();
//  }
