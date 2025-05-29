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
          <th scope="col">id_user</th>
          <th scope="col">usuario</th>
          <th scope="col">senha</th>
          <th scope="col">nome</th>
          <th scope="col">...</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $resultando = foi2();
        while ($ligado = $resultando->fetch(PDO::FETCH_ASSOC)) {
          echo '<tr>';
          echo '<td>' . htmlspecialchars($ligado['id_user']) . '</td>';
          echo '<td>' . htmlspecialchars($ligado['usuario']) . '</td>';
          echo '<td>' . htmlspecialchars($ligado['senha']) . '</td>';
          echo '<td>' . htmlspecialchars($ligado['nome']) . '</td>';
          echo "<td><button>ALTERAR</button></td>";
          echo '</tr>';
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>