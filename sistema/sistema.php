<?php
echo '<pre>';
session_start();
require '../conexao.php';

function foi2()
{
  global $pdo;
  return $pdo->query("SELECT * from tb_user ORDER BY id_user DESC");


}

// function chamando($usuario, $senha, $nome){
//     global $pdo;
//     $query = ('SELECT * from tb_user where usuario = :usuario and senha = :senha and nome= :nome ORDER BY id DESC');
//     $resultado2= $pdo->prepare($query); 
//     $resultado2->bindParam(':usuario', $usuario);
//     $resultado2->bindParam(':senha', $senha);
//     $resultado2->bindParam(':nome', $nome);
//     $resultado2->execute();
//     return $resultado2;
// }


echo 'hi ' . $_SESSION['usuario'];


// var_export($logado);

// var_export(foi2());






// var_export(foi2());

echo '</pre>';


// if (!empty($_GET['id_user'])) {
//   require 'conexao.php';
//   $id = $_GET['id_user'];

// }



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
  <a href="../index.php"><button>Voltar para login ou cadastrado</button></a>
  <div>
    <table class="table">
      <thead>
        <tr>
          <th>id_user</th>
          <th>usuario</th>
          <th>senha</th>
          <th>nome</th>
          <th>...</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $resultado = foi2();
        while($lista = $resultado->fetch(PDO::FETCH_ASSOC)){
          echo "<tr>";
          echo "<td>" . htmlspecialchars($lista['id_user']) . "</td>";
          echo "<td>" . htmlspecialchars($lista['usuario']) . "</td>";
          echo "<td>" . htmlspecialchars($lista['senha']) . "</td>";
          echo "<td>" . htmlspecialchars($lista['nome']) . "</td>";
          echo "" . "<td>" . "<a href='../alterar_dash.php?=$lista[id_user]'><button>Alterar</button></a>" . "</td>";
          echo "</tr>";
        }
        ?>
      </tbody>
      </table>
  </div>
</body>

</html>