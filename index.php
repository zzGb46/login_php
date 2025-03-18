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

  ?>

  <?php 
    
  ?>

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
   
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</body>

</html>