<?php

$mensagem= "";
$nome = "";
$email = "";
$msg = "";
if(isset($_POST["nome"], $_POST["email"], $_POST["msg"])){
    include ('conexao.php');
    $nome = mysqli_real_escape_string($mysqli, $POST['nome']);
    $email = mysqli_real_escape_string($mysqli, $POST['email']);
    $msg = mysqli_real_escape_string($mysqli, $POST['msg']);

    if(!$nome || !$email || !$msg){
        $mensagem = "Dados Inválidos";
    } else{
        $res= $mysqli->prepare("INSERT into tb_contato(nome, email, msg)
        values(
        '$nome',
        '$email',
        '$msg')");
        $stm->bind_param('nome,', $nome);
        $stm->bind_param('email,', $email);
        $stm->bind_param('msg,', $msg);
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>

<body>
    <main>
        <form method="POST">
            <div id="form">
                <label>Nome</label>
                <input type="text" name="nome" required />
                <label>E-mail</label>
                <input type="email" name="email" required />
                
                <label>Mensagem</label>
                <textarea name="msg"></textarea>
                <button type="submit">Enviar</button>
            </div>

        </form>
    </main>
</body>

</html>