<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>Document</title>
</head>

<body>
  <?php
  session_start();

  require_once("conexao.php");

  ?>

  <?php
  if (isset($_SESSION['nao_autenticado'])) {

  }
  ?>
  <!-- <script>
    alert('Erro: Usuário ou senha inválidos!');
  </script> -->

  <?php

  ?>
  <form method="GET" action="login.php">
    <div class="form-group">
      <label for="exampleInputEmail1">Endereço de email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="usuario">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Senha</label>
      <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">nome</label>
      <input type="text" name="nome" class="form-control" id="exampleInputPassword1" placeholder="Nome">
    </div>



    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

  <a href="Recuperar/recuperar_senha.php">Esqueceu a senha?</a><br><br>

  <h2>Deseja fazer um cadastro?</h2>
  <a href="<?php echo missao ?>">CLIQUE AQUI!</a><br><br>

  <h2>Contato?</h2>

  <a href="<?php echo mensagem ?>">Contato</a><br><br>

<!-- CRIANDO TELA DE CADASTRO DE HORARIO PHP -->
  <?php
  if (isset($_POST['entrada'], $_POST['saida'], $_POST['calendario'])) {
    $entrada = $_POST['entrada'];
    $saida = $_POST['saida'];
    $data = $_POST['calendario'];

    $agendamento = "INSERT INTO tb_horario(entrada, saida, calendario)
    values(:entrada, :saida, :calendario);";
    $resolucao= $pdo->prepare($agendamento);
    $resolucao->bindParam(':entrada', $entrada);
    $resolucao->bindParam(':saida', $saida);
    $resolucao->bindParam(':calendario', $data);
    $sucess= $resolucao->execute();

    if($sucess){
      echo "<span style='color:green;'>horario cadastrado com sucesso";
    }else{
      echo "<span style='color:red;'>erro";
    }
  }

  ?>

  <h2>Cadastrar horario de agendamento?</h2>
  <form method="POST" action="">
  <label>Data:</label>
    <input type="date" name="calendario" required><br><br>

    <label>Entrada:</label>
    <input type="time" name="entrada" required><br><br>

    <label>Saida:</label>
    <input type="time" name="saida" required><br><br>

    <input type="submit" value="cadastra" name="SendCadHorario">
  </form>
</body>




</html>