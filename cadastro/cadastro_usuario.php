
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
require '../conexao.php';
?>

<form action="cadastro.php" method="POST">
<input type="text" name="user" placeholder="user"><br>
<input type="password" name="senha" placeholder="senha"><br>
<input type="text" name="nome" placeholder="nome"><br>
<input type="submit" placeholder="ENVIAR">
</form>
    
</body>
</html>