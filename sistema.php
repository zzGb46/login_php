<?php 
echo '<pre>';
session_start();
require 'conexao.php';

// function foi2(){
//     global $pdo;
//     $query = $pdo->query("SELECT * from tb_user");
//     $resultado = $query->fetchAll();
//     return $resultado;
// }

function chamando($usuario, $senha, $nome){
    global $pdo;
    $query = ('SELECT * from tb_user where id_user= :id and usuario = :usuario and senha = :senha and nome= :nome');
    $resultado2= $pdo->prepare($query); 
    $resultado2->bindParam(':id_user', $id);
    $resultado2->bindParam(':usuario', $usuario);
    $resultado2->bindParam(':senha', $senha);
    $resultado2->bindParam(':nome', $nome);
    $resultado2->execute();
    return $resultado2;
}






// var_export(foi2());

echo '</pre>';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">usuario</th>
      <th scope="col">senha</th>
      <th scope="col">nome</th>
    </tr>
  </thead>
  <tbody>
  
  </tbody>
</table>
    </div>
</body>
</html>