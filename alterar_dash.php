<?php

if (!empty($_GET['id_user'])) {
    require 'conexao.php';
    $id = $_GET['id_user'];

    $sqlSelect = "SELECT * from tb_user where id = :id";
    $resultando = $pdo->prepare($sqlSelect);
    $resultando->bindParam(':id', $id);

    if($resultando->rowCount() > 0){
        
    }
    
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="sistema/sistema.php"><button>Voltar</button></a>
    <form method="GET">
        <input type="email" name>
    </form>
</body>

</html>