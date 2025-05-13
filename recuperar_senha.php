<?php
include_once 'conexao.php';
?>

<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Recuperação de senha</title>
</head>

<body>
    <h1>Recuperar senha</h1>
    <form method="GET" action="">
        <div class="form-group">
            <label for="exampleInputEmail1">Endereço de email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="usuario">
        </div>
        <input type="submit" value="Recuperar" name="SendRecuperar">
    </form>
</body>

<?php

function foi()
{
    global $mysqli;
    $query = $mysqli->query("SELECT id_user, usuario, senha 
                                    FROM tb_user 
                                    ");
    $resultado = $query->fetch_assoc();
    return $resultado;
}

var_export(foi());
?>



</html>